<?php
// src/Ens/JobeetBundle/DataFixtures/ORM/LoadTaskData.php
namespace Ens\JobeetBundle\DataFixtures\ORM;
 
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

    foreach ($names as $name) {
      // On crée la catégorie
      $task = new Task();
      $task->setName($name);
      $task->setStep(Task::ADMINISTRATIF);

      // On la persiste
      $em->persist($task);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $em->flush();
  }
 
  public function getOrder()
  {
    return 4; // the order in which fixtures will be loaded
  }
}

?>