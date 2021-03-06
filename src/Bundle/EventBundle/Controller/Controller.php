<?php

namespace Bundle\EventBundle\Controller;

use Bundle\EventBundle\Entity\Event;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @return \Symfony\Component\Security\Core\SecurityContext
     */
    public function getSecurityContext()
    {
        return $this->container->get('security.context');
    }

    public function enforceOwnerSecurity(Event $event)
    {
        $user = $this->getUser();

        if ($user != $event->getOwner())
        {
            throw new AccessDeniedException('You are not the owner!');
        }
    }

    public function enforceUserSecurity($role = 'ROLE_USER')
    {
        if (!$this->getSecurityContext()->isGranted($role)) {
            throw new AccessDeniedException('Need '.$role);
        }
    }

    public function checkForNotFoundException($entity, $message)
    {
        if (!$entity) {
            throw $this->createNotFoundException($message);
        }
    }
    
}