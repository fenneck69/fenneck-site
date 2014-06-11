<?php

namespace Gestion\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gestion\CoreBundle\Entity\ActiviteType;

class LoadActiviteTypeData extends AbstractFixture implements OrderedFixtureInterface
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
                'nom'=>'Prix fixe',
                'code'=>'prixfixe',
            ),
            array(
                'nom'=>'Cinéma',
                'code'=>'cinema',
            ),
            array(
                'nom'=>'Taux/Nombre/Plafond',
                'code'=>'tauxnbplafond',
            ),
            array(
                'nom'=>'Quotient',
                'code'=>'quotient',
            ),
        );
        foreach($tabParam as $key=>$param) {
            $q = new ActiviteType();
            $q->setNom($param['nom'])
                ->setCode($param['code']);
            $manager->persist($q);
            $manager->flush();
            $this->addReference('activiteType-'.$param['code'], $q);
        }
    }
}