<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
			
			//FIXTURE
			new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
			//STOF DOCTRINE EXTENSION
			new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
			//FORM
			new Thrace\FormBundle\ThraceFormBundle(),
			/*multi-upload*/
			new Thrace\MediaBundle\ThraceMediaBundle(),
			//IMAGINE
			new Liip\ImagineBundle\LiipImagineBundle(),
			//FOS
			new FOS\UserBundle\FOSUserBundle(),
			//KNP
			new Knp\Bundle\MenuBundle\KnpMenuBundle(),
			new Knp\Bundle\GaufretteBundle\KnpGaufretteBundle(),
			/*pdf*/
			new Knp\Bundle\SnappyBundle\KnpSnappyBundle(),
			/*GRAPHIQUE*/
			new Ob\HighchartsBundle\ObHighchartsBundle(),
			//SONATA
			new Sonata\BlockBundle\SonataBlockBundle(),
			new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
			new Sonata\AdminBundle\SonataAdminBundle(),
			new Sonata\CoreBundle\SonataCoreBundle(),
			new Sonata\IntlBundle\SonataIntlBundle(),
			//ACL LIST FILTERING
			new MrGreenStuff\Bundle\AclSonataAdminExtensionBundle\MrGreenStuffAclSonataAdminExtensionBundle(),
			//new Sonata\MediaBundle\SonataMediaBundle(),
			//new Application\Sonata\MediaBundle\ApplicationSonataMediaBundle(),
			new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
			new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'),
			//BOOTSTRAP FORM UI
			new VinceT\BootstrapFormBundle\VinceTBootstrapFormBundle(),
			//OWN
			new Application\Sonata\UserBundle\ApplicationSonataUserBundle(),
			new Gestion\CoreBundle\GestionCoreBundle(),
			
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
