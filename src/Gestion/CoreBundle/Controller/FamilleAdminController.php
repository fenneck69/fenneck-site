<?php

namespace Gestion\CoreBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

class FamilleAdminController extends CRUDController
{
/**
     * return the Response object associated to the view action
     *
     * @param null $id
     *
     * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     *
     * @return Response
     */
    public function showAction($id = null)
    {
        $id = $this->get('request')->get($this->admin->getIdParameter());

        $object = $this->admin->getObject($id);

        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
        }

        if (false === $this->admin->isGranted('VIEW', $object)) {
            throw new AccessDeniedException();
        }

        $this->admin->setSubject($object);
		
        return $this->render("GestionCoreBundle:Famille:base_show.html.twig", array(
            'action'   => 'show',
            'object'   => $object,
            'elements' => $this->admin->getShow(),
        ));
    }
}
