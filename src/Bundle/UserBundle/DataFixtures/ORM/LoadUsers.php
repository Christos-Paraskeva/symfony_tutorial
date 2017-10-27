<?php

namespace Bundle\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Bundle\UserBundle\Entity\User;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadUsers implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('chris');
        $user->setEmail('chris@gmail.com');
        $user->setPlainPassword('chrispass');
        $manager->persist($user);

        $admin = new User();
        $admin->setUsername('chrisadmin');
        $admin->setEmail('chrisadmin@gmail.com');
        $admin->setPlainPassword('chrisadminpass');
        $admin->setRoles(array('ROLE_ADMIN'));
        $manager->persist($admin);

        // the queries aren't done until now
        $manager->flush();
    }

    public function getOrder()
    {
        return 10;
    }

    private function encodePassword(User $user, $plainPassword)
    {
        $encoder = $this->container->get('security.encoder_factory')
            ->getEncoder($user)
        ;
        return $encoder->encodePassword($plainPassword, $user->getSalt());
    }

}