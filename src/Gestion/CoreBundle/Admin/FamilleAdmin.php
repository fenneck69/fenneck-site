<?php

namespace Gestion\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class FamilleAdmin extends Admin
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
            ->add('id')
            ->add('nom')
            ->add('agence')
            ->add('quotient')
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
            ->with('Général',array('col'=>1,'panel_type'=>'info', 'class'=>'col-md-6'))
            ->add('nom')
            ->add('dateEntree','bootstrap_datepicker',array(
                'format' => 'dd/MM/yyyy'
            ))
            ->add('agence')
            ->add('quotient')
            ->end()
			->with('Documents',array('col'=>1,'panel_type'=>'info', 'class'=>'col-md-6'))
			->add('rib', 'thrace_file_upload', array(
                'label' => 'RIB',
                'data_class' => 'Gestion\CoreBundle\Entity\File',
                'configs' => array(
                    'extensions' => 'application/pdf,application/x-pdf,application/msword,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation,image/gif,image/jpeg,image/png',
                    'max_upload_size' => '4M',
					'enabled_button' => false
                ),
            ))
			->end()
            ->with('Membres',array('col'=>2,'panel_type'=>'warning','noLabel'=>true, 'class'=>'col-md-6'))
            ->add('membres', 'sonata_type_collection', array(), array(
                'edit' => 'inline',
                'inline' => 'table',
                'sortable'  => 'position'
            ))
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
		 ->with('Général',array('col'=>1,'panel_type'=>'info'))
            ->add('nom')
            ->add('dateEntree', 'date', array('format' => 'dd/MM/yyyy'))
            ->add('agence')
            ->add('quotient')
            ->add('membres')
			->end()
			->with('RIB',array('col'=>2,'panel_type'=>'warning','type'=>'documents','noLabel'=>true))
				->add('rib')
            ->end()
        ;
    }


    public function preUpdate($object){
        $object->setMembres($object->getMembres());
    }
    public function prePersist($object){
        $object->setMembres($object->getMembres());
    }
}
