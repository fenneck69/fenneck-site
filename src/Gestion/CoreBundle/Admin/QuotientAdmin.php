<?php

namespace Gestion\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class QuotientAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('minimum')
            ->add('maximum')
            ->add('prelevement')
            ->add('bonification')
            ->add('plan')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('minimum','currency',array('currency'=>'EUR'))
            ->add('maximum','currency',array('currency'=>'EUR'))
            ->add('prelevement','currency',array('currency'=>'EUR'))
            ->add('bonification','currency',array('currency'=>'EUR'))
            ->add('plan','currency',array('currency'=>'EUR'))
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
            ->add('minimum')
            ->add('maximum')
            ->add('prelevement')
            ->add('bonification')
            ->add('plan')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('minimum')
            ->add('maximum')
            ->add('prelevement')
            ->add('bonification')
            ->add('plan')
        ;
    }
}
