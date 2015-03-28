<?php

namespace Flyd\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Need
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Flyd\DashboardBundle\Entity\NeedRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Need
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
    * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\Client", inversedBy="needs")
    */
    private $client;

    /**
    * @ORM\OneToMany(targetEntity="Flyd\DashboardBundle\Entity\Project", mappedBy="need", cascade={"persist", "remove"})
    */
    private $projects;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


    public function __construct() 
    {
        $this->projects       = new ArrayCollection();
        $this->createdAt      = new \Datetime();
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
     * @param Project $project
     * @return Company
     */
    public function addProject(Project $project)
    {
        $this->projects[] = $project;

        $project->setNeed($this);

        return $this;
    }

    /**
    * @param Project $project
    */
    public function removeProject(Project $project)
    {
        $this->projects->removeElement($project);
    }

    /**
    * @return ArrayCollection
    */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Need
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Need
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
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
        $this->setUpdatedAt(new \Datetime());
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
     * Set client
     *
     * @param \Flyd\DashboardBundle\Entity\Client $clients
     * @return Need
     */
    public function setClient(\Flyd\DashboardBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Flyd\DashboardBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    public function __toString() {
        return $this->title;
    }
}
