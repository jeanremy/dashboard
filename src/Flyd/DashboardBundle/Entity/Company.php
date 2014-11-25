<?php

namespace Flyd\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Flyd\DashboardBundle\Entity\CompanyRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"company" = "Company", "client" = "Client", "supplier" = "Supplier"})
 */
class Company
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
    * @ORM\OneToMany(targetEntity="Flyd\DashboardBundle\Entity\Address", mappedBy="company", cascade={"persist"})
    */
    private $addresses;

    /**
    * @ORM\OneToMany(targetEntity="Flyd\DashboardBundle\Entity\Contact", mappedBy="company", cascade={"persist"})
    */
    private $contacts;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="entrance", type="date")
     */
    private $entrance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reminder", type="date")
     */
    private $reminder;

    /**
     * @var string
     *
     * @ORM\Column(name="origin", type="string")
     */
    private $origin;




    public function __construct()
    {
        $this->entrance = new \Datetime();
        $this->reminder = new \Datetime();
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
     * @return Company
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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

    /**
     * Set entrance
     *
     * @param \DateTime $entrance
     * @return Company
     */
    public function setEntrance($entrance)
    {
        $this->entrance = $entrance;

        return $this;
    }

    /**
     * Get entrance
     *
     * @return \DateTime 
     */
    public function getEntrance()
    {
        return $this->entrance;
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
}

