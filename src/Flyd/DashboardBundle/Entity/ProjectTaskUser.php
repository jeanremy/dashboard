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
 */
class ProjectTaskUser
{


    /**
     * @var \Flyd\DashboardBundle\Entity\Project
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\Project", inversedBy="project_task_users")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $project;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\Task", inversedBy="project_task_users")
     * @ORM\JoinColumn(name="task_id", referencedColumnName="id")
     */
    private $task;

    /**
     * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\User", inversedBy="project_task_users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\Status", inversedBy="project_task_users")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    private $status;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="position", type="integer")
     */
    private $position;


    /**
     * @var boolean
     *
     * @ORM\Column(name="is_important", type="boolean", nullable=true)
     */
    private $isImportant;

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
     * Set isImportant
     *
     * @param boolean $isImportant
     * @return ProjectTaskUser
     */
    public function setIsImportant($isImportant)
    {
        $this->isImportant = $isImportant;

        return $this;
    }

    /**
     * Get isImportant
     *
     * @return boolean 
     */
    public function getIsImportant()
    {
        return $this->isImportant;
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
