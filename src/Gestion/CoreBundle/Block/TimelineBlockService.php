<?php

namespace Gestion\CoreBundle\Block;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Sonata\BlockBundle\Block\BaseBlockService;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Validator\ErrorElement;


class TimelineBlockService extends BaseBlockService
{
    private $container;
    /**
     * Constructor
     *
     * @param string                   $name
     * @param EngineInterface          $templating
     */
    public function __construct($name, EngineInterface $templating, $container)
    {
        $this->container=$container;
        parent::__construct($name, $templating);
    }
	
    public function execute(BlockContextInterface $blockContext, Response $response = null)
    {
         $remboursements = $this->container->get('doctrine')->getRepository('GestionCoreBundle:Remboursement')->getMonthRemboursements();
        return $this->renderPrivateResponse($blockContext->getTemplate(), array(
            'block'   => $blockContext->getBlock(),
            'remboursements'   => $remboursements,
        ));
    }

    public function setDefaultSettings(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'template' => 'GestionCoreBundle:Block:timeline.html.twig',
            'remboursements' => false
        ));
    }

    public function getName()
    {
        return 'General Block';
    }
	/**
     * {@inheritdoc}
     */
    public function buildEditForm(FormMapper $form, BlockInterface $block)
    {
        // no options available
    }

    /**
     * {@inheritdoc}
     */
    public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
    {
    }
}