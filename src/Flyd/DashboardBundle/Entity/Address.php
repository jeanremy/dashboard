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

    /* Const for type attribute */
    const GLOBALE = 0;
    const FACTURATION = 1;
    const EXPEDITION = 2;



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
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint")
     */
    private $type;



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

    /**
     * Set type
     *
     * @param integer $type
     * @return Address
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        switch ($this->type) {
            case 0:
                return 'globale';
                break;
            case 1:
                return 'facturation';
                break;
            case 2:
                return 'expédition';
                break;
        }
        
    }

    public function __toString() {
        return $this->city;
    }
}
