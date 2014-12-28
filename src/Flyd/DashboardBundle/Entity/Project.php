<?php

namespace Flyd\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Project
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Flyd\DashboardBundle\Entity\ProjectRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Project
{
    /**/
    const DESIGN     = 0;
    const MOTION    = 1;
    const WEB       = 2;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\Need", inversedBy="projects")
    */
    private $need;

    /**
    * @ORM\ManyToMany(targetEntity="Flyd\DashboardBundle\Entity\Supplier")
    */
    private $suppliers;

    /**
     * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\ProjectCanvas")
     * @ORM\JoinColumn(nullable=true)
     */
    private $project_canvas;

    /**
    * @ORM\OneToMany(targetEntity="Flyd\DashboardBundle\Entity\ProjectTaskUser", mappedBy="project")
    */
    private $project_task_users;

    /**
    * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\User", inversedBy="projects")
    */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="category", type="integer")
     */
    private $category;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deadline", type="date")
     */
    private $deadline;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date")
     */
    private $endDate;

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
        $this->createdAt                = new \Datetime();
        $this->suppliers                = new ArrayCollection();
        $this->project_task_users       = new ArrayCollection();
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
     * Set Need
     *
     * @return Need 
     */
    public function setNeed(Need $need)
    {
        $this->need = $need;

        return $this;
    }

    public function getNeed()
    {
        return $this->need;
    }

    /**
     * @param Supplier $supplier
     * @return Project
     */
    public function addSupplier(Supplier $supplier)
    {
        $this->suppliers[] = $supplier;

        $supplier->setCompany($this);

        return $this;
    }

    /**
    * @param Supplier $supplier
    */
    public function removeSupplier(Supplier $supplier)
    {
        $this->suppliers->removeElement($supplier);
    }

    /**
    * @return ArrayCollection
    */
    public function getSuppliers()
    {
        return $this->suppliers;
    }

    /**
     * @param ProjectTaskUser $project_task_user
     * @return Project
     */
    public function addProjectTaskUser(ProjectTaskUser $project_task_user)
    {
        $this->project_task_users[] = $project_task_user;

        $project_task_user->setCompany($this);

        return $this;
    }

    /**
    * @param ProjectTaskUser $project_task_user
    */
    public function removeProjectTaskUser(ProjectTaskUser $project_task_user)
    {
        $this->project_task_users->removeElement($project_task_user);
    }

    /**
    * @return ArrayCollection
    */
    public function getProjectTaskUsers()
    {
        return $this->project_task_users;
    }



    public function setProjectCanvas(ProjectCanvas $project_canvas)
    {
        $this->project_canvas = $project_canvas;

        return $this;
    }

    public function getProjectCanvas()
    {
        return $this->project_canvas;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Project
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
     * Set category
     *
     * @param string $category
     * @return Project
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Project
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set deadline
     *
     * @param \DateTime $deadline
     * @return Project
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get deadline
     *
     * @return \DateTime 
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Project
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
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
     * Set project_task_users
     *
     * @param \Flyd\DashboardBundle\Entity\ProjectTaskUser $projectTaskUsers
     * @return Project
     */
    public function setProjectTaskUsers(\Flyd\DashboardBundle\Entity\ProjectTaskUser $projectTaskUsers = null)
    {
        $this->project_task_users = $projectTaskUsers;

        return $this;
    }

    /**
     * Set user
     *
     * @param \Flyd\DashboardBundle\Entity\User $users
     * @return Project
     */
    public function setUser(\Flyd\DashboardBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Flyd\DashboardBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
