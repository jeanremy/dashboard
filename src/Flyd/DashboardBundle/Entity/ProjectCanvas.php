<?php

namespace Flyd\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectCanvas
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ProjectCanvas
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
     * @ORM\OneToMany(targetEntity="Flyd\DashboardBundle\Entity\ProjectCanvasTask", mappedBy="project_canvas")
     */
    private $project_canvas_tasks;


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
     * @return ProjectCanvas
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
     * Constructor
     */
    public function __construct()
    {
        $this->project_canvas_tasks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add project_canvas_tasks
     *
     * @param \Flyd\DashboardBundle\Entity\ProjectCanvas $projectCanvasTasks
     * @return ProjectCanvas
     */
    public function addProjectCanvasTask(\Flyd\DashboardBundle\Entity\ProjectCanvas $projectCanvasTasks)
    {
        $this->project_canvas_tasks[] = $projectCanvasTasks;

        return $this;
    }

    /**
     * Remove project_canvas_tasks
     *
     * @param \Flyd\DashboardBundle\Entity\ProjectCanvas $projectCanvasTasks
     */
    public function removeProjectCanvasTask(\Flyd\DashboardBundle\Entity\ProjectCanvas $projectCanvasTasks)
    {
        $this->project_canvas_tasks->removeElement($projectCanvasTasks);
    }

    /**
     * Get project_canvas_tasks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjectCanvasTasks()
    {
        return $this->project_canvas_tasks;
    }
}
