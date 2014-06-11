<?php

namespace Gestion\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gestion\CoreBundle\Entity\Famille;
use Gestion\CoreBundle\Entity\Membre;

class LoadFamilleData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 3;
    }
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $tabParam = array(
            array(
                'nom'=>'Doe',
                'rib'=>'151 518 66545',
                'quotitent'=>$this->getReference('quotient-2'),
                'agence'=>$this->getReference('agence-0'),
                'dateEntree'=>new \DateTime("2010-04-08"),
            ),

        );
        foreach($tabParam as $key=>$param) {
            $q = new Famille();
            $q->setNom($param['nom'])
                ->setRib($param['rib'])

                ->setDateEntree($param['dateEntree'])

                ->setQuotient($param['quotitent'])
                ->setAgence($param['agence']);
            $manager->persist($q);
            $manager->flush();
            $this->addReference('famille-'.$param['nom'], $q);
        }
    }
}