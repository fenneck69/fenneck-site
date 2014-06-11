<?php

namespace Gestion\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class RemboursementAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
	 protected function configureRoutes(RouteCollection $collection) {
        $collection->add('precalc', '/precalc');
		$collection->add('paiement', $this->getRouterIdParameter().'/paiement');
	}
	 
	 
	 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('prix')
            ->add('membre')
            ->add('membre.famille.agence')
            ->add('numCheque')
			//->add('valide')
            ->add('created','doctrine_orm_callback' , array(
                'callback' => function($queryBuilder, $alias, $field, $value) {
                        if ($value['value']===null) {
                            $value['value']=new \DateTime(date('Y').'-01-01');
                        }

                        $queryBuilder->andWhere('o.created >= :dateDebut');
                        $queryBuilder->setParameter('dateDebut', $value['value']->format('Y-m-d'));
                        return true;
                    },
                'field_type' => 'date','label'=>'Ajouté du :'),null, array('widget'=> 'single_text','format'=>'dd/MM/yyyy','attr'=>array('class'=>'date bootstrap-datepicker','data-date'=>'','data-language'=>'fr','data-week-start'=>1)))
        ;
    }



    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('membre')
            ->add('membre.famille.agence')
            ->add('created', 'date', array('format' => 'dd/MM/yyyy'))
            ->add('prix','currency',array('currency'=>'EUR'))
            ->add('quantite')
            ->add('montantParticipation','currency',array('currency'=>'EUR'))
            ->add('activite')
            ->add('dateActivite', 'date', array('format' => 'dd/MM/yyyy'))
			->add('valide','boolean', array('editable' => false))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                   // 'edit' => array(),
                    'delete' => array(),
					'Paiement' => array(
                        'template' => 'GestionCoreBundle:Remboursement:list__action_paiement.html.twig'
                    ),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    { 
	//$membres = $this->getConfigurationPool()->getContainer()->get('doctrine')->getRepository('GestionCoreBundle:Membre')->findAllMembresArray();
	//var_dump($membres);
	//$membres = $this->modelManager->getEntityManager('Gestion\CoreBundle\Entity\Membre')->findAll(Query::HYDRATE_ARRAY);
	//$membres = $this->modelManager->getEntityManager('Gestion\CoreBundle\Entity\Membre')->createQuery('SELECT m FROM Gestion\CoreBundle\Entity\Membre m')->getResult();
        $formMapper
            ->add('membre',null,array('attr' => array('class' =>'listMembre')))
            ->add('activite',null,array('attr' => array('class' =>'listActivite')))
            ->add('prix',null,array('attr' => array('class' =>'prixRemb')))
            ->add('quantite','integer',array('attr' => array('class' =>'qteRemb')))
            ->add('numCheque')
			->add('valide')
            ->add('dateActivite','bootstrap_datepicker',array(
                'format' => 'dd/MM/yyyy'
            ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('created')
            ->add('updated')
            ->add('prix','currency',array('currency'=>'EUR'))
            ->add('quantite')
            ->add('montantParticipation','currency',array('currency'=>'EUR'))
            ->add('montantCheque','currency',array('currency'=>'EUR'))
            ->add('numCheque')
			->add('valide')
            ->add('dateActivite', 'date', array('format' => 'dd/MM/yyyy'))
        ;
    }
}
