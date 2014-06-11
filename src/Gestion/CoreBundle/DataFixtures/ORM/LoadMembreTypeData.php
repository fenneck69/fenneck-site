<?php

namespace Gestion\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gestion\CoreBundle\Entity\MembreType;

class LoadMembreTypeData extends AbstractFixture implements OrderedFixtureInterface
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
                'nom'=>'Enfant',
                'code'=>'enfant',
            ),
            array(
                'nom'=>'Conjoint',
                'code'=>'conjoint',
            ),
            array(
                'nom'=>'Salarié',
                'code'=>'salarie',
            ),
        );
        foreach($tabParam as $key=>$param) {
            $q = new MembreType();
            $q->setNom($param['nom'])
                ->setCode($param['code']);
            $manager->persist($q);
            $manager->flush();
            $this->addReference('membreType-'.$param['code'], $q);
        }
    }
}