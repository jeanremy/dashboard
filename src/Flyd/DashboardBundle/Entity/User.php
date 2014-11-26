<?php

namespace Flyd\DashboardBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity()
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\ManyToOne(targetEntity="Flyd\DashboardBundle\Entity\ProjectTaskUser", inversedBy="users")
    */
    private $project_task_users;


    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=255)
     */
    private $job;

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
     * Set job
     *
     * @param string $job
     * @return Contact
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set project_task_users
     *
     * @param \Flyd\DashboardBundle\Entity\ProjectTaskUser $projectTaskUsers
     * @return User
     */
    public function setProjectTaskUsers(\Flyd\DashboardBundle\Entity\ProjectTaskUser $projectTaskUsers = null)
    {
        $this->project_task_users = $projectTaskUsers;

        return $this;
    }
}
