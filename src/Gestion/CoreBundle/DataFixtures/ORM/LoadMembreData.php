<?php

namespace Gestion\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gestion\CoreBundle\Entity\Membre;


class LoadMembreData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 4;
    }
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $tabParam = array(
            array(
                'nom'=>'Doe',
                'prenom'=>'John',
                'date'=>new \DateTime("1960-07-08"),
                'type'=>$this->getReference('membreType-salarie'),
                'famille'=>$this->getReference('famille-Doe'),
            ),
            array(
                'nom'=>'Doe',
                'prenom'=>'Sylvie',
                'date'=>new \DateTime("1970-09-08"),
                'type'=>$this->getReference('membreType-conjoint'),
                'famille'=>$this->getReference('famille-Doe'),
            ),
            array(
                'nom'=>'Doe',
                'prenom'=>'Julie',
                'date'=>new \DateTime("2010-01-08"),
                'type'=>$this->getReference('membreType-enfant'),
                'famille'=>$this->getReference('famille-Doe'),
            ),
            array(
                'nom'=>'Doe',
                'prenom'=>'Bobby',
                'date'=>new \DateTime("1987-04-08"),
                'type'=>$this->getReference('membreType-enfant'),
                'famille'=>$this->getReference('famille-Doe'),
            ),
        );
        foreach($tabParam as $key=>$param) {
            $q = new Membre();
            $q->setNom($param['nom'])
                ->setPrenom($param['prenom'])
                ->setDateNaissance($param['date'])
                ->setType($param['type'])
                ->setFamille($param['famille']);
            $manager->persist($q);
            $manager->flush();
            $this->addReference('membre-'.$key, $q);
        }
    }
}