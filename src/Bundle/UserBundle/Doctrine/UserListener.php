<?php

namespace Bundle\UserBundle\Doctrine;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Bundle\UserBundle\Entity\User;

class UserListener
{
    private $encoderFactory;

    public function __construct(\Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if($entity instanceof User) {
            $this->handleEvent($entity);
        }
    }

    private function handleEvent(User $user)
    {
        $plainPassword = $user
            ->getPlainPassword()
        ;

        $encoder = $this->encoderFactory
            ->getEncoder($user)
        ;

        var_dump($plainPassword);
        $password = $encoder->encodePassword($plainPassword, $user->getSalt());
        $user->setPassword($password);
    }

}