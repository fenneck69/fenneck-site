<?php

namespace Gestion\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MembreAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance','doctrine_orm_callback' , array(
                'callback' => function($queryBuilder, $alias, $field, $value) {
                        if ($value['value']===null) {
                            $value['value']=new \DateTime('1950-01-01');
                        }

                        $queryBuilder->andWhere('o.dateNaissance >= :dateDebut');
                        $queryBuilder->setParameter('dateDebut', $value['value']->format('Y-m-d'));
                        return true;
                    },
                'field_type' => 'date','label'=>'Date de naissance > à :'),null, array('widget'=> 'single_text','format'=>'dd/MM/yyyy','attr'=>array('class'=>'date bootstrap-datepicker','data-date'=>'','data-language'=>'fr','data-week-start'=>1)))
            ->add('type')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance', 'date', array('format' => 'dd/MM/yyyy'))
            ->add('type')
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
			->add('famille')
            ->add('nom')
            ->add('prenom')
			->add('email')
            ->add('dateNaissance','birthday')
            ->add('type')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
		->add('famille')
            ->add('nom')
            ->add('prenom')
			->add('email')
            ->add('dateNaissance', 'date', array('format' => 'dd/MM/yyyy'))
            ->add('type')
        ;
    }
}
