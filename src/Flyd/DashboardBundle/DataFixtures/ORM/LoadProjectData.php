<?php
// src/Ens/JobeetBundle/DataFixtures/ORM/LoadProjectData.php
namespace Ens\JobeetBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Flyd\DashboardBundle\Entity\Project;
 
class LoadProjectData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {

      $project = new Project();
      $project->setTitle('Site Internet');
      $project->setCategory(Project::DESIGN);
      $project->setStartDate(new \DateTime());
      $project->setDeadline(new \DateTime());
      $project->setEndDate(new \DateTime());
      //$project->setNeed;
      //$project->setProjectCanvas;

      // On la persiste
      $em->persist($project);
    // On déclenche l'enregistrement de toutes les catégories
    $em->flush();
  }
 
  public function getOrder()
  {
    return 1; // the order in which fixtures will be loaded
  }
}

?>