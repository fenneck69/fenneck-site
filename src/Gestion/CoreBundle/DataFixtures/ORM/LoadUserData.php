<?php

namespace Gestion\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {

    /**
     * @var ContainerInterface
     */
    private $container;

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
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function load(ObjectManager $manager) {

		/***********************************/
		/****************USERS**************/
		/***********************************/
        $userManager = $this->container->get('fos_user.user_manager');
		$tableauUsers=array(
							array(
									'username'=>'admin',
									'roles'=>array('ROLE_SUPER_ADMIN'),
									'groups'=>array()
								),

							);
		foreach($tableauUsers as $rowUser){
			// Create a new user
			$user = $userManager->createUser();
			$user->setUsername($rowUser['username']);
			$user->setEmail($rowUser['username'].'@azerty.net');
			$user->setPlainPassword($rowUser['username']);
			$user->setEnabled(true);
			foreach($rowUser['roles'] as $role){
				$user->addRole($role);
			}
			foreach($rowUser['groups'] as $group){
				$user->addGroup($this->getReference('GROUP_'.$group));
			}
			$manager->persist($user);
			$manager->flush();
			$this->addReference('user-'.$user->getUsername(), $user);
			
		}
	}
}