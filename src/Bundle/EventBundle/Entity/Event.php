<?php

namespace Bundle\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Bundle\UserBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="Bundle\EventBundle\Entity\ProfileRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Event
{
    public function __construct()
    {
        $this->attendees = new ArrayCollection();
        $this->invitees = new ArrayCollection();
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Bundle\UserBundle\Entity\User",
     *                inversedBy="events"
     * )
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $owner;

    /**
     * @ORM\ManyToMany(targetEntity="Bundle\UserBundle\Entity\User")
     * @ORM\JoinTable(name="event_attending_user")
     */
    protected $attendees;

    /**
     * @ORM\ManyToMany(targetEntity="Bundle\UserBundle\Entity\User")
     * @ORM\JoinTable(name="event_invited_user")
     */
    protected $invitees;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime")
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="text", nullable=true)
     */
    private $details;

    /**
     * @Gedmo\Slug(fields={"name"}, updatable=false)
     * @ORM\Column(length=255, unique=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        if (!$this->getCreatedAt()) {
            $this->setCreatedAt(new \DateTime());
        }
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Event
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getAttendees()
    {
        return $this->attendees;
    }

    public function getInvitees()
    {
        return $this->invitees;
    }

    public function hasInvitee(User $user)
    {
        return $this->getInvitees()->contains($user);
    }

    /**
     * @param \Bundle\UserBundle\Entity\User $user
     * @return bool
     */
    public function hasAttendee(User $user)
    {
        return $this->getAttendees()->contains($user);
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    public function getOwner()
    {
        return $this->owner;
    }
    public function setOwner(\Bundle\UserBundle\Entity\User $owner)
    {
        $this->owner = $owner;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Event
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Event
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return Event
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string 
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    public function setCreatedAt($time)
    {
        $this->createdAt = $time;
    }

    /**
     * @return \DateTime */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * @return \DateTime */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

}
