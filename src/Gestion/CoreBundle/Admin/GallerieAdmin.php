<?php
namespace Gestion\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

use Knp\Menu\ItemInterface as MenuItemInterface;

use Gestion\CoreBundle\Entity\Gallerie;

class GallerieAdmin extends Admin
{

    protected function configureRoutes(RouteCollection $collection) {
        $collection->add('test', $this->getRouterIdParameter() . '/test');
    }
    /**
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     *
     * @return void
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->with('Général',array('col'=>1,'panel_type'=>'info'))
            ->add('titre')
            ->add('isAffiche')
            ->end()
  /*          ->with('Photos',array('col'=>2,'panel_type'=>'success'))
            ->add('projets',null, array('template' => 'GestionCoreBundle:Client:liste_projets.html.twig'))
            ->end()*/
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     *
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Informations générales',array('col'=>1,'panel_type'=>'info'))
            ->add('titre',null,array('attr'=> array('class'=>'span12')))
            ->add('isAffiche',null,array('attr'=> array('class'=>'span12')))
            ->end()
            ->with('Documents',array('col'=>2,'panel_type'=>'warning','noLabel'=>true))
            ->add('items', 'thrace_multi_image_upload_collection',array(
                'label' => 'Documents',
                'options' => array(
                    'data_class' => 'Gestion\CoreBundle\Entity\MultiImage',
                    //'label_render' => false, #fix mopa bootstrap bundle.
                    //'widget_form_group' => false, #fix mopa-bootstrap bundle.

                ),
                'configs' => array(
                    'minWidth' => 300,
                    'minHeight' => 100,
                    'extensions' => 'image/gif,image/jpeg,image/png',
                    'max_upload_size' => '4M',
                    'div_class' => 'col-lg-9' //fix mopa-bootsrap-bundle
                )
            ))
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
            ->add('titre')
            ->add('isActive')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array()
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
            ->add('titre')
        ;
    }
}