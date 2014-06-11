<?php

namespace Gestion\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gestion\CoreBundle\Entity\Activite;

class LoadActiviteData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2;
    }
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $tabParam = array(
            array(
                'nom'=>'Cinéma UGC',
                'code'=>'cinema-ugc',
                'type'=>'cinema',
                'prix'=>10,
                'prixReduc'=>4.85,
                'nbMax'=>4,
                'ageMax'=>16,
                'periodicite'=>1,
                'plafond'=>null,
                'taux'=>null,
                'membreType'=>array('conjoint','enfant','salarie'),
            ),
            array(
                'nom'=>'Cinéma CGR',
                'code'=>'cinema-cgr',
                'type'=>'cinema',
                'prix'=>10,
                'prixReduc'=>4.15,
                'nbMax'=>4,
                'ageMax'=>16,
                'periodicite'=>1,
                'plafond'=>null,
                'taux'=>null,
                'membreType'=>array('conjoint','enfant','salarie'),
            ),
            array(
                'nom'=>'Cinéma PATHE',
                'code'=>'cinema-pathe',
                'type'=>'cinema',
                'prix'=>10,
                'prixReduc'=>5.35,
                'nbMax'=>4,
                'ageMax'=>16,
                'periodicite'=>1,
                'plafond'=>null,
                'taux'=>null,
                'membreType'=>array('conjoint','enfant','salarie'),
            ),
            array(
                'nom'=>'Chèque lire/multimedia',
                'code'=>'cheque-lire',
                'type'=>'prixfixe',
                'prix'=>10,
                'prixReduc'=>7,
                'nbMax'=>3,
                'ageMax'=>16,
                'periodicite'=>1,
                'plafond'=>null,
                'taux'=>null,
                'membreType'=>array('conjoint','enfant','salarie'),
            ),
            array(
                'nom'=>'Abonnement sportif/culturel',
                'code'=>'abonnement',
                'type'=>'tauxnbplafond',
                'prix'=>null,
                'prixReduc'=>null,
                'nbMax'=>2,
                'ageMax'=>16,
                'periodicite'=>12,
                'plafond'=>60,
                'taux'=>30,
                'membreType'=>array('enfant','salarie'),
            ),
            array(
                'nom'=>'Spectacle',
                'code'=>'spectacle',
                'type'=>'tauxnbplafond',
                'prix'=>null,
                'prixReduc'=>null,
                'nbMax'=>6,
                'ageMax'=>16,
                'periodicite'=>12,
                'plafond'=>11,
                'taux'=>30,
                'membreType'=>array('conjoint','enfant','salarie'),
            ),
            array(
                'nom'=>'Chèques vacances',
                'code'=>'cheque-vacance',
                'type'=>'quotient',
                'prix'=>null,
                'prixReduc'=>null,
                'nbMax'=>1,
                'ageMax'=>16,
                'periodicite'=>12,
                'plafond'=>null,
                'taux'=>null,
                'membreType'=>array('conjoint'),
            ),
        );
        foreach($tabParam as $key=>$param) {
            $q = new Activite();
            $q->setNom($param['nom'])
                ->setType($this->getReference('activiteType-'.$param['type']))
                ->setPrixPlein($param['prix'])
                ->setPrixReduit($param['prixReduc'])
                ->setAgeMax($param['ageMax'])
                ->setPeriodicite($param['periodicite'])
                ->setPlafond($param['plafond'])
                ->setPrixReduit($param['prixReduc'])
                ->setTaux($param['taux'])
                ->setNbMax($param['nbMax']);
            foreach($param['membreType'] as $membre) {
                $q->addMembreType($this->getReference('membreType-'.$membre));
            }
            $manager->persist($q);
            $manager->flush();
            $this->addReference('activite-'.$param['code'], $q);
        }
    }
}