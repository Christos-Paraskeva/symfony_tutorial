<?php

namespace Yoda\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

class UserRepository extends \Doctrine\ORM\EntityRepository
{
    public function findOneByUsernameOrEmail($username)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.username = :username OR u.email = :email')
            ->setParameter('username', $username)
            ->setParameter('email', $username)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }
}
