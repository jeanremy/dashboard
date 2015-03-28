<?php

namespace Flyd\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Task
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Flyd\DashboardBundle\Entity\TaskRepository")
 */
class Task
{
    const ADMINISTRATIF = 0;
    const STUDIO = 1;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\OneToMany(targetEntity="Flyd\DashboardBundle\Entity\ProjectTaskUser", mappedBy="task")
    */
    private $project_task_users;

    

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="step", type="integer")
     */
    private $step;

    public function __construct()
    {
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

    /**
     * Set name
     *
     * @param string $name
     * @return Task
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
     * Set step
     *
     * @param integer $step
     * @return Task
     */
    public function setStep($step)
    {
        $this->step = $step;

        return $this;
    }

    /**
     * Get step
     *
     * @return integer 
     */
    public function getStep()
    {
        if($this->step == 1){
            return 'studio'; 
        } else {
            return 'administratif';
        }
    }

    /**
     * Set project_task_users
     *
     * @param \Flyd\DashboardBundle\Entity\ProjectTaskUser $projectTaskUsers
     * @return Task
     */
    public function setProjectTaskUsers(\Flyd\DashboardBundle\Entity\ProjectTaskUser $projectTaskUsers = null)
    {
        $this->project_task_users = $projectTaskUsers;

        return $this;
    }
}
