<?php
// src/Flyd/DashboardBundle/DataFixtures/ORM/LoadProjectData.php
namespace Flyd\DashboardBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Flyd\DashboardBundle\Entity\Project;
use Flyd\DashboardBundle\Entity\User;
 
class LoadProjectData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    for ($i = 0; $i < 10; $i++) {

      $project = new Project();
      $project->setTitle('Site Internet');
      $project->setCategory(Project::DESIGN);
      $project->setStartDate(new \DateTime());
      $project->setDeadline(new \DateTime());
      $project->setEndDate(new \DateTime());
      $project->addUser($this->getReference('user'));
      $project->addSupplier($this->getReference('supplier '.$i));
      $project->setNeed($this->getReference('besoin '.$i));
      //$project->setNeed;
      //$project->setProjectCanvas;

      // On la persiste
      $em->persist($project);
    }
    // On déclenche l'enregistrement de toutes les catégories
    $em->flush();
  }
 
  public function getOrder()
  {
    return 6; // the order in which fixtures will be loaded
  }
}

?>