<?php

namespace Flyd\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Address
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Flyd\DashboardBundle\Entity\AddressRepository")
 */
class Address
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
    * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\Company", inversedBy="addresses")
    */
    private $company;

    /**
     * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\Type")
     */
    protected $type;

    /**
     * @var string
     *
     * @ORM\Column(name="building", type="string", length=255, nullable=true)
     */
    private $building;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="street_comp", type="string", length=255, nullable=true)
     */
    private $streetComp;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=6)
     * @Assert\Length(max=6, maxMessage="Le code postal doit faire au moins {{ limit }} caractères.")
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="city_comp", type="string", length=255, nullable=true)
     */
    private $cityComp;




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
     * Set Company
     *
     * @return Company 
     */
    public function setCompany(Company $company)
    {
        $this->company = $company;

        return $this;
    }

    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set type
     *
     * @param \Flyd\DashboardBundle\Entity\Type $type
     * @return Company
     */
    public function setType(\Flyd\DashboardBundle\Entity\Type $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Flyd\DashboardBundle\Entity\Type 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set building
     *
     * @param string $building
     * @return Address
     */
    public function setBuilding($building)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get building
     *
     * @return string 
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set streetComp
     *
     * @param string $streetComp
     * @return Address
     */
    public function setStreetComp($streetComp)
    {
        $this->streetComp = $streetComp;

        return $this;
    }

    /**
     * Get streetComp
     *
     * @return string 
     */
    public function getStreetComp()
    {
        return $this->streetComp;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return Address
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set cityComp
     *
     * @param string $cityComp
     * @return Address
     */
    public function setCityComp($cityComp)
    {
        $this->cityComp = $cityComp;

        return $this;
    }

    /**
     * Get cityComp
     *
     * @return string 
     */
    public function getCityComp()
    {
        return $this->cityComp;
    }

   

    public function __toString() {
        return $this->city;
    }
}
