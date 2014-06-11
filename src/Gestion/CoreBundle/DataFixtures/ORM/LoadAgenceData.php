<?php

namespace Gestion\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gestion\CoreBundle\Entity\Agence;

class LoadAgenceData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $tabParam = array(
            array(
                'nom'=>'Lyon',
                'abreviation'=>'LY',
            ),
            array(
                'nom'=>'Paris',
                'abreviation'=>'PA',
            ),
            array(
                'nom'=>'Clermont Ferrand',
                'abreviation'=>'CF',
            ),
            array(
                'nom'=>'Siege',
                'abreviation'=>'SI',
            ),
            array(
                'nom'=>'Aix en provence',
                'abreviation'=>'AIX',
            ),

        );
        foreach($tabParam as $key=>$param) {
            $q = new Agence();
            $q->setNom($param['nom'])
                ->setAbreviation($param['abreviation']);
            $manager->persist($q);
            $manager->flush();
            $this->addReference('agence-'.$key, $q);
        }
    }
}