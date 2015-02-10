<?php

namespace Flyd\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ProjectTaskUser
 *
 * @ORM\Table(name="project_task_user")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Flyd\DashboardBundle\Entity\ProjectTaskUserRepository")
 */
class ProjectTaskUser
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
     * @var \Flyd\DashboardBundle\Entity\Project
     * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\Project", inversedBy="project_task_users")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $project;

    /**
     * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\Task", inversedBy="project_task_users", cascade="persist")
     * @ORM\JoinColumn(name="task_id", referencedColumnName="id")
     */
    private $task;

    /**
     * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\User", inversedBy="project_task_users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\Status")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    private $status;

    /**
     * @var integer
     * @ORM\Column(name="position", type="integer")
     */
    private $position;


    /**
     * @var boolean
     *
     * @ORM\Column(name="important", type="boolean", nullable=true)
     */
    private $important;

    /**
     * @var time
     *
     * @ORM\Column(name="estimated_time", type="time", nullable=true)
     */
    private $estimatedTime;

    /**
     * @var time
     *
     * @ORM\Column(name="real_time", type="time", nullable=true)
     */
    private $realTime;


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
     * Set position
     *
     * @param string $position
     * @return ProjectCanvasTask
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**Position
     * Get position
     *
     * @return int 
     */
    public function getPosition()
    {
        return $this->position;
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
     * Tasks
     *
     */

    public function setTask(Task $task)
    {
        $this->task = $task;

        return $this;
    }

    public function getTask()
    {
        return $this->task;
    }

    /**
     * Status
     *
     */

    public function setStatus(Status $status)
    {
        $this->status = $status;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set project
     *
     * @param integer $project
     * @return ProjectTaskUser
     */
    public function setProject(Project $project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return integer 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set user
     *
     * @param integer $user
     * @return ProjectTaskUser
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer 
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * Set important
     *
     * @param boolean $important
     * @return ProjectTaskUser
     */
    public function setImportant($important)
    {
        $this->important = $important;

        return $this;
    }

    /**
     * Get important
     *
     * @return boolean 
     */
    public function getImportant()
    {
        return $this->important;
    }

    /**
     * Set estimatedTime
     *
     * @param \DateTime $estimatedTime
     * @return ProjectTaskUser
     */
    public function setEstimatedTime($estimatedTime)
    {
        $this->estimatedTime = $estimatedTime;

        return $this;
    }

    /**
     * Get estimatedTime
     *
     * @return \DateTime 
     */
    public function getEstimatedTime()
    {
        return $this->estimatedTime;
    }

    /**
     * Set realTime
     *
     * @param \DateTime $realTime
     * @return ProjectTaskUser
     */
    public function setRealTime($realTime)
    {
        $this->realTime = $realTime;

        return $this;
    }

    /**
     * Get realTime
     *
     * @return \DateTime 
     */
    public function getRealTime()
    {
        return $this->realTime;
    }
}
