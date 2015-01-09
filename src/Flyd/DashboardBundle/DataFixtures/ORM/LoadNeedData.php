<?php
// src/Flyd/DashboardBundle/DataFixtures/ORM/LoadNeedData.php
namespace Flyd\DashboardBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Flyd\DashboardBundle\Entity\Need;
 
class LoadNeedData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    

    for ($i = 0; $i < 10; $i++) {

      $need = new Need();
      $need->setClient($this->getReference('client '.$i));
      $need->setTitle('Besoin '.$i);
      $need->setDescription('un besoin en or');
      $this->setReference('besoin '.$i, $need);
      $em->persist($need);

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