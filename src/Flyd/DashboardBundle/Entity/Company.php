<?php

namespace Flyd\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Company
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Flyd\DashboardBundle\Entity\CompanyRepository")
 * @ORM\HasLifecycleCallbacks()
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
    * @ORM\OneToMany(targetEntity="Flyd\DashboardBundle\Entity\Address", mappedBy="company", cascade={"persist", "remove"})
    */
    private $addresses;

    /**
    * @ORM\OneToMany(targetEntity="Flyd\DashboardBundle\Entity\Contact", mappedBy="company", cascade={"persist", "remove"})
    */
    private $contacts;

    


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="entrance", type="date")
     */
    private $entrance;


    /**
     * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\Origin")
     */
    private $origin;

    /**
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;




    public function __construct()
    {
        $this->entrance     = new \DateTime();
        $this->createdAt    = new \DateTime();
        $this->addresses    = new ArrayCollection();
        $this->contacts     = new ArrayCollection();
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
     * @param Address $address
     * @return Company
     */
    public function addAddress(Address $address)
    {
        $this->addresses[] = $address;

        $address->setCompany($this);

        return $this;
    }

    /**
    * @param Address $address
    */
    public function removeAdress(Address $address)
    {
        $this->addresses->removeElement($address);
    }

    /**
    * @return ArrayCollection
    */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param Contact $contact
     * @return Company
     */
    public function addContact(Contact $contact)
    {
        $this->contacts[] = $contact;

        $contact->setCompany($this);

        return $this;
    }

    /**
    * @param Contact $contact
    */
    public function removeContact(Contact $contact)
    {
        $this->contacts->removeElement($contact);
    }

    /**
    * @return ArrayCollection
    */
    public function getContacts()
    {
        return $this->contacts;
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


    public function setCreatedAt(\Datetime $createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
    * @ORM\PreUpdate
    */
    public function updateDate()
    {
        $this->setUpdatedAt(new \DateTime());
    }

    public function setUpdatedAt(\Datetime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Remove addresses
     *
     * @param \Flyd\DashboardBundle\Entity\Address $addresses
     */
    public function removeAddress(\Flyd\DashboardBundle\Entity\Address $addresses)
    {
        $this->addresses->removeElement($addresses);
    }

    /**
     * Set origin
     *
     * @param \Flyd\DashboardBundle\Entity\Origin $origin
     * @return Company
     */
    public function setOrigin(\Flyd\DashboardBundle\Entity\Origin $origin = null)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get origin
     *
     * @return \Flyd\DashboardBundle\Entity\Origin 
     */
    public function getOrigin()
    {
        return $this->origin;
    }

}
