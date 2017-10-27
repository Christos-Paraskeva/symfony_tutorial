<?php

namespace Bundle\EventBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Bundle\EventBundle\Entity\Event;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadEvents implements FixtureInterface, OrderedFixtureInterface
{
    public function getOrder()
    {
        return 20;
    }
    public function load(ObjectManager $manager)
    {
        $chrisadmin = $manager->getRepository('UserBundle:User')
            ->findOneByUsernameOrEmail('chrisadmin')
        ;

        $event1 = new Event();
        $event1->setName("Chris's Birthday Party");
        $event1->setLocation('Somewhere');
        $event1->setTime(new \DateTime('tomorrow noon'));
        $event1->setDetails('Ha! Ha! !!!');
        $event1->setOwner($chrisadmin);
        $manager->persist($event1);

        $event2 = new Event();
        $event2->setName('Rebellion Fundraiser Bake Sale!');
        $event2->setLocation('Somewhere else');
        $event2->setTime(new \DateTime('Thursday noon'));
        $event2->setDetails('Support the rebellion!');
        $event2->setOwner($chrisadmin);
        $manager->persist($event2);

        // the queries aren't done until now
        $manager->flush();
    }
}
