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
//GRAPHIQUE
use Ob\HighchartsBundle\Highcharts\Highchart;


class ChartBlockService extends BaseBlockService
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
		$options=$blockContext->getSettings();
		//CREATION CHART
		$ob = new Highchart();
		$ob->exporting->enabled(false);
		$ob->legend->enabled(true);
		$ob->credits->enabled(false);
		$name=$options['chart'].rand(1,10000);
		$ob->chart->renderTo($name);  // The #id of the div where to render the chart
		/*switch($options['chart']){
			case 'test':
				$series = array(
					array("name" => "Evolution CA",    "data" => array(
						array(time()-(3600000*24*5),rand(0,20)),
						array(time()-(3600000*24*4),rand(0,20)),
						array(time()-(3600000*24*3),rand(0,20)),
						array(time()-(3600000*24*2),rand(0,20)),
						array(time()-(3600000*24*1),rand(0,20)),
						array(time(),rand(0,20)),
					)
				)
				);
				$ob->title->text("Chiffre d'affaire");
				//$ob->xAxis->title(array('text'  => "Horizontal axis title"));
				$ob->xAxis->type('datetime');
				$ob->xAxis->dateTimeLabelFormats(array('month'=>'%e. %b','year'=>'%b'));
				$ob->yAxis->title(array('text'  => "Chiffre d'affaire"));
				
				$ob->series($series);
			break;
		}*/
        switch($options['chart']){
            case 'general':
            $ob->plotOptions->pie(array(
                'allowPointSelect'  => true,
                'cursor'    => 'pointer',
                'dataLabels'    => array('enabled' => false),
                'showInLegend'  => true
            ));
            $agences = $this->container->get('doctrine')->getRepository('GestionCoreBundle:Agence')->findAll();
            $data = array();
            $totalRemboursementsNation = $this->container->get('doctrine')->getRepository('GestionCoreBundle:Remboursement')->getTotalRemboursements();
			$totalRemboursementsAttente = $this->container->get('doctrine')->getRepository('GestionCoreBundle:Remboursement')->getTotalRemboursementsAttente();
            foreach($agences as $agence){
                if($totalRemboursementsNation){
                array_push($data, array($agence->getNom().' - '.number_format($this->container->get('doctrine')->getRepository('GestionCoreBundle:Remboursement')->getTotalRemboursementsByAgence($agence),2).'€', ($this->container->get('doctrine')->getRepository('GestionCoreBundle:Remboursement')->getTotalRemboursementsByAgence($agence)*100)/$totalRemboursementsNation));
                }
            }

           /* $remboursements = $this->container->get('doctrine')->getRepository('GestionCoreBundle:Remboursement')

            $data = array(
                array('Firefox', 45.0),
                array('IE', 26.8),
                array('Chrome', 12.8),
                array('Safari', 8.5),
                array('Opera', 6.2),
                array('Others', 0.7),
            );*/
            $ob->title->text("Total des remboursements par agence");
            //$ob->tooltip(array('pointFormat' => '{series.name}: <b>{point.percentage:.1f}%</b>'));
            $ob->tooltip->pointFormat('{series.name}: <b>{point.percentage}%</b>');
            $ob->series(array(array('type' => 'pie','name' => 'Pourcentage des remboursements de la région', 'data' => $data)));
                break;
        }

        
        return $this->renderPrivateResponse($blockContext->getTemplate(), array(
            'block'   => $blockContext->getBlock(),
            'chart'   => $ob,
            'name'   => $name,
            'totalRemb' => $totalRemboursementsNation,
			'totalRemboursementsAttente' => $totalRemboursementsAttente,
            'anneeCours' => date('Y'),
        ));
    }

    public function setDefaultSettings(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'template' => 'GestionCoreBundle:Block:test.html.twig',
            'chart' => false
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