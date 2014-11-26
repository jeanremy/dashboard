<?php

namespace Flyd\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ProjectTaskUser
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
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
     * @ORM\OneToMany(targetEntity="Flyd\DashboardBundle\Entity\Project", mappedBy="project_task_users")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     * @ORM\Id
     */
    private $project;

    /**
     * @ORM\OneToMany(targetEntity="Flyd\DashboardBundle\Entity\Task", mappedBy="project_task_users")
     * @ORM\JoinColumn(name="task_id", referencedColumnName="id")
     * @ORM\Id
     */
    private $task;

    /**
     * @ORM\OneToMany(targetEntity="Flyd\DashboardBundle\Entity\User", mappedBy="project_task_users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * @ORM\Id
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string")
     */
    private $status;

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
     * Set status
     *
     * @param string $status
     * @return ProjectTaskUser
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
