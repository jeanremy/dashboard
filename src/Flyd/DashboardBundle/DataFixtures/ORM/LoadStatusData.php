<?php
// src/Flyd/DashboardBundle/DataFixtures/ORM/LoadStatusData.php
namespace Flyd\DashboardBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Flyd\DashboardBundle\Entity\Status;
 
class LoadStatusData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $names = array(
      'A venir',
      'En cours',
      'En cours de validation',
      'Terminé'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $status = new Status();
      $status->setName($name);

      // On la persiste
      $em->persist($status);
    }
    // On déclenche l'enregistrement de toutes les catégories
    $em->flush();
  }
 
  public function getOrder()
  {
    return 12; // the order in which fixtures will be loaded
  }
}

?>