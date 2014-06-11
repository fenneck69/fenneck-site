<?php

namespace Gestion\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ActiviteAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nom')
            ->add('prixPlein')
            ->add('prixReduit')
            ->add('taux')
            ->add('nbMax')
            ->add('ageMax')
            ->add('periodicite')
            ->add('plafond')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nom')
            ->add('prixPlein')
            ->add('prixReduit')
            ->add('taux')
            ->add('nbMax')
            ->add('ageMax')
            ->add('periodicite')
            ->add('plafond')
            ->add('type')
            ->add('membreTypes')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nom')
            ->add('prixPlein')
            ->add('prixReduit')
            ->add('taux')
            ->add('nbMax')
            ->add('ageMax')
            ->add('periodicite')
            ->add('plafond')
            ->add('type')
            ->add('membreTypes')
        ;
    }
}
