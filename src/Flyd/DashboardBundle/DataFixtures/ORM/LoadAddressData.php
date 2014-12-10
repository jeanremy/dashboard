<?php
// src/Flyd/DashboardBundle/DataFixtures/ORM/LoadAddressData.php
namespace Flyd\DashboardBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Flyd\DashboardBundle\Entity\Client;
use Flyd\DashboardBundle\Entity\Address;
 
class LoadAddressData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    
      $address = new Address();
      $address->setStreet('4 rue factice');
      $address->setStreetComp('complement');
      $address->setZipcode('44024');
      $address->setCity('Nantes');
      $address->setCityComp('Cedex 4');
      $address->setType(Address::FACTURATION);


      //$em->persist($address);
      $em->persist($client);

      // On déclenche l'enregistrement de toutes les catégories
      $em->flush();
  }
 
  public function getOrder()
  {
    return 10; // the order in which fixtures will be loaded
  }
}

?>