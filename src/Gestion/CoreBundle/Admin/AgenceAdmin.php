<?php
namespace Gestion\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use MrGreenStuff\Bundle\AclSonataAdminExtensionBundle\Helper\SelectAclFilter;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

use Gestion\CoreBundle\Entity\Agence;

class AgenceAdmin extends Admin
{




	
    /**
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     *
     * @return void
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->with('Général')
				->add('nom')
				->add('abreviation')
			->end()
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     *
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
		//FORM
        $formMapper
            ->with('Général')
				->add('nom')
				->add('abreviation')
				 /*->setHelps(array(
                   'nom' => 'Test aide'
                ))*/
			->end()
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     *
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nom')
			->add('abreviation')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
					'view' => array(),
                )
            ))
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     *
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {

        $datagridMapper
            ->add('nom')
			->add('abreviation')
        ;
    }
}