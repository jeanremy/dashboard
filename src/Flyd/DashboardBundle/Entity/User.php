<?php

namespace Flyd\DashboardBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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
    * @ORM\OneToMany(targetEntity="Flyd\DashboardBundle\Entity\ProjectTaskUser", mappedBy="user")
    */
    private $project_task_users;

    /**
    * @ORM\ManyToMany(targetEntity="Flyd\DashboardBundle\Entity\Project")
    */
    private $projects;

    /**
    * @ORM\OneToOne(targetEntity="Flyd\DashboardBundle\Entity\Image", cascade={"persist", "remove"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $image;


    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=255, nullable=true)
     */
    private $job;


    private $file;

    public function __construct()
    {
        parent::__construct();
        $this->project_task_users   = new ArrayCollection();
        $this->projects             = new ArrayCollection();
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
     * Get reminder
     *
     * @return \DateTime 
     */
    public function getReminder()
    {
        return $this->reminder;
    }

    /**
     * @param Project $project
     * @return User
     */
    public function addProject(Project $project)
    {
        $this->projects[] = $project;

        $project->addUser($this);

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
     * Set image
     *
     * @param string $image
     */
    public function setImage(Image $image = null)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
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

    public function getFile()
    {
        return $this->file;
    }

    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

}
