<?php
// src/Flyd/DashboardBundle/DataFixtures/ORM/LoadTypeData.php
namespace Flyd\DashboardBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Flyd\DashboardBundle\Entity\Type;
 
class LoadTypeData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $names = array(
      'Globale',
      'Facturation',
      'Expédition'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $type = new Type();
      $type->setName($name);

      // On la persiste
      $em->persist($type);
      $this->setReference($name, $type);

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