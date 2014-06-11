<?php

namespace Gestion\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gestion\CoreBundle\Entity\Quotient;

class LoadQuotientData extends AbstractFixture implements OrderedFixtureInterface
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
                'min'=>0,
                'max'=>5185,
                'prelev'=>18.40,
                'bonif'=>234.40,
                'plan'=>400,
            ),
            array(
                'min'=>5186,
                'max'=>10261,
                'prelev'=>21.23,
                'bonif'=>208.93,
                'plan'=>400,
            ),
            array(
                'min'=>10262,
                'max'=>15354,
                'prelev'=>24.09,
                'bonif'=>183.19,
                'plan'=>400,
            ),
            array(
                'min'=>15355,
                'max'=>20409,
                'prelev'=>26.95,
                'bonif'=>157.45,
                'plan'=>400,
            ),
            array(
                'min'=>20410,
                'max'=>999999999,
                'prelev'=>29.81,
                'bonif'=>131.71,
                'plan'=>400,
            ),
        );
        foreach($tabParam as $key=>$param) {
            $q = new Quotient();
            $q->setMinimum($param['min'])
                ->setMaximum($param['max'])
                ->setPrelevement($param['prelev'])
                ->setBonification($param['bonif'])
                ->setPlan($param['plan']);
            $manager->persist($q);
            $manager->flush();
            $this->addReference('quotient-'.$key, $q);
        }
    }
}