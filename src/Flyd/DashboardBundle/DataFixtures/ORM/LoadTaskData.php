<?php
// src/Flyd/DashboardBundle/DataFixtures/ORM/LoadTaskData.php
namespace Flyd\DashboardBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Flyd\DashboardBundle\Entity\Task;
 
class LoadTaskData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $names = array(
      'Devis',
      'Zoning',
      'Developpement',
      'Animation',
      'Facturation'
    );

     for ($i = 0; $i < count($names); $i++) {
      // On crée la catégorie
      $task = new Task();
      $task->setName($names[$i]);
      $task->setStep(Task::ADMINISTRATIF);
      $this->setReference('task '.$i, $task);

      // On la persiste
      $em->persist($task);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $em->flush();
  }
 
  public function getOrder()
  {
    return 8; // the order in which fixtures will be loaded
  }
}

?>