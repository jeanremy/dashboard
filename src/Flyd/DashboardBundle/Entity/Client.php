<?php

namespace Flyd\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Flyd\DashboardBundle\Entity\Company;
use Doctrine\Common\Collections\ArrayCollection;

/** @ORM\Entity */
class Client extends Company
{

    /* Const for type attribute */
    const ACTUAL = 0;
    const PROSPECT = 1;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint", nullable=true)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reminder", type="date")
     */
    private $reminder;

    /**
    * @ORM\OneToMany(targetEntity="Flyd\DashboardBundle\Entity\Need", mappedBy="client", cascade={"persist", "remove"})
    */
    private $needs;



    public function __construct()
    {
        parent::__construct();
        $this->needs        = new ArrayCollection();
        $this->reminder     = new \DateTime("+1 year");
    }


    public function __toString() {
        return $this->name;
    }


    /**
     * Set type
     *
     * @param int $type
     * @return Client
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set reminder
     *
     * @param \DateTime $reminder
     * @return Company
     */
    public function setReminder($reminder)
    {
        $this->reminder = $reminder;

        return $this;
    }

    /**
     * Get reminder
     *
     * @return \DateTime 
     */
    public function getReminder()
    {
        return $this->reminder;
    }

    /**
     * @param Need $need
     * @return Company
     */
    public function addNeed(Need $need)
    {
        $this->needs[] = $need;

        $need->setCompany($this);

        return $this;
    }

    /**
    * @param Need $need
    */
    public function removeNeed(Need $need)
    {
        $this->needs->removeElement($need);
    }

    /**
    * @return ArrayCollection
    */
    public function getNeeds()
    {
        return $this->needs;
    }
}
