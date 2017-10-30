<?php

namespace Bundle\ProfileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Bundle\UserBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Profile
 *
 * @ORM\Table(name="profile")
 * @ORM\Entity(repositoryClass="Bundle\ProfileBundle\Entity\ProfileRepository")
 */
class Profile
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Bundle\UserBundle\Entity\User", inversedBy="profile")
     * @ORM\JoinColumn(name="user_profile", referencedColumnName="id")
     */
    protected $user;
}