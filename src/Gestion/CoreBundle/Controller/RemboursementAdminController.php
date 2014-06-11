<?php

namespace Gestion\CoreBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RemboursementAdminController extends CRUDController
{
   public function createAction()
    {
        // the key used to lookup the template
        $templateKey = 'edit';

        if (false === $this->admin->isGranted('CREATE')) {
            throw new AccessDeniedException();
        }

        $object = $this->admin->getNewInstance();

        $this->admin->setSubject($object);

        /** @var $form \Symfony\Component\Form\Form */
        $form = $this->admin->getForm();
        $form->setData($object);

        if ($this->getRestMethod()== 'POST') {
            $form->submit($this->get('request'));

            $isFormValid = $form->isValid();

            // persist if the form was valid and if in preview mode the preview was approved
            if ($isFormValid && (!$this->isInPreviewMode() || $this->isPreviewApproved())) {
					
					if($form->get('valide')->getData() && $form->get('membre')->getData()->getEmail() != ""){
						$mailer = $this->get('mailer');
						$message = \Swift_Message::newInstance()
						  ->setSubject('Nouveau remboursement accepté')
						  ->setFrom('no-reply@cedigitalvirgo.fr')
						  ->setTo($form->get('membre')->getData()->getEmail())
						 ->setBody('Votre remboursement : '.$form->get('activite')->getData()->getNom().' a bien été remboursé.<br/><br/>Le CE.', 'text/html');
						 //  ->setBody($this->renderView('AnjJeuxBundle:Jeux:email.html.twig', array('lot' => $lot, 'participant' => $participant)), 'text/html');
						$mailer->send($message);
					
					}
					
                if (false === $this->admin->isGranted('CREATE', $object)) {
                    throw new AccessDeniedException();
                }

                $this->admin->create($object);

                if ($this->isXmlHttpRequest()) {
                    return $this->renderJson(array(
                        'result' => 'ok',
                        'objectId' => $this->admin->getNormalizedIdentifier($object)
                    ));
                }

                $this->addFlash('sonata_flash_success', $this->admin->trans('flash_create_success', array('%name%' => $this->admin->toString($object)), 'SonataAdminBundle'));

                // redirect to edit mode
                return $this->redirectTo($object);
            }

            // show an error message if the form failed validation
            if (!$isFormValid) {
                if (!$this->isXmlHttpRequest()) {
                    $this->addFlash('sonata_flash_error', $this->admin->trans('flash_create_error', array('%name%' => $this->admin->toString($object)), 'SonataAdminBundle'));
                }
            } elseif ($this->isPreviewRequested()) {
                // pick the preview template if the form was valid and preview was requested
                $templateKey = 'preview';
                $this->admin->getShow();
            }
        }

        $view = $form->createView();

        // set the theme for the current Admin Form
        $this->get('twig')->getExtension('form')->renderer->setTheme($view, $this->admin->getFormTheme());
		$repo = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('GestionCoreBundle:Activite');
        return $this->render("GestionCoreBundle:Remboursement:base_edit.html.twig", array(
            'action' => 'create',
            'form'   => $view,
            'object' => $object,
			'cinemaUGC' => $repo->find(1),
			'cinemaCGR' => $repo->find(2),
			'cinemaPATHE' => $repo->find(3),
			'chequeLire' => $repo->find(4),
			'aboSport' => $repo->find(5),
			'aboSpectacle' => $repo->find(6),
			
        ));
    }
	
	
	
	public function paiementAction($id = NULL)
    {
		
        $id = $this->get('request')->get($this->admin->getIdParameter());

        $object = $this->admin->getObject($id);
		//die(var_dump($object->getMembre()));
        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
        }
		 $form = $this->admin->getForm();
        $form->setData($object);

        if(!$form->get('valide')->getData()){
		
			$em = $this->getDoctrine()->getManager();
			$remboursement = $em->getRepository('GestionCoreBundle:Remboursement')->find($id);
			//die(var_dump($remboursement->getValide()));
			$remboursement->setValide(true);
			$em->persist($remboursement);
			$em->flush();			
			$this->addFlash('sonata_flash_success', 'Le paiement du remboursement a bien été validé.');		

			if($form->get('membre')->getData()->getEmail() != ""){
						$mailer = $this->get('mailer');
						$message = \Swift_Message::newInstance()
						  ->setSubject('Nouveau remboursement accepté !')
						  ->setFrom('no-reply@cedigitalvirgo.fr')
						  ->setTo($form->get('membre')->getData()->getEmail())
						  //->setTo("nicolas@jobenjoy.fr")
						 ->setBody('Votre remboursement : '.$form->get('activite')->getData()->getNom().' a bien été remboursé.<br/><br/>Le CE.', 'text/html');
						 //  ->setBody($this->renderView('AnjJeuxBundle:Jeux:email.html.twig', array('lot' => $lot, 'participant' => $participant)), 'text/html');
						$mailer->send($message);
			$this->addFlash('sonata_flash_success', 'Le mail de confirmation a bien été envoyé.');				
		}else{
			$this->addFlash('sonata_flash_error', "Impossible d'envoyer le mail de confirmation car le membre ne possède pas d'adresse email.");	
		}

			
		}else{
			$this->addFlash('sonata_flash_error', 'Le paiement de ce remboursement a deja été validé.');	
		}
		
		
                                       
       

        

        return new RedirectResponse($this->admin->generateUrl('list'));
    }
	
	
	
	

	
	
	
	
	
	public function precalcAction(){
		if(empty($_GET['membre'])){
			echo 0;
			die();
		}
		global $kernel;
		if ('AppCache' == get_class($kernel)) {
			$kernel = $kernel->getKernel();
		}
		$em = $this->getDoctrine()->getManager();
		$membre = $em->getRepository('GestionCoreBundle:Membre')->find($_GET['membre']);
		$quotient = $membre->getFamille()->getQuotient()->getBonification();
		
		echo $quotient;
		die();
	}
}
