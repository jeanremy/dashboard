<?php

namespace Flyd\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectCanvasTask
 *
 * @ORM\Table(name="projectcanvas_task")
 * @ORM\Entity
 */
class ProjectCanvasTask
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
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\ProjectCanvas", inversedBy="project_canvas_tasks")
     */
    private $project_canvas;

    /**
     * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\Task", inversedBy="project_canvas_tasks", cascade="persist")
     */
    private $task;



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

    public function setTask(Task $task)
    {
        $this->task = $task;

        return $this;
    }

    public function getTask()
    {
        return $this->task;
    }
}
