<?php
// src/Flyd/DashboardBundle/DataFixtures/ORM/LoadOriginData.php
namespace Flyd\DashboardBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Flyd\DashboardBundle\Entity\Origin;
 
class LoadOriginData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $names = array(
      'Démarchage Téléphonique',
      'Copinage'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $origin = new Origin();
      $origin->setName($name);

      // On la persiste
      $em->persist($origin);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $em->flush();
  }
 
  public function getOrder()
  {
    return 1; // the order in which fixtures will be loaded
  }
}

?>