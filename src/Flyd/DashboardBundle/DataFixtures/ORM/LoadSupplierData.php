<?php
// src/Flyd/DashboardBundle/DataFixtures/ORM/LoadSupplierData.php
namespace Flyd\DashboardBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Flyd\DashboardBundle\Entity\Supplier;
use Flyd\DashboardBundle\Entity\Address;
use Flyd\DashboardBundle\Entity\Contact;
 
class LoadSupplierData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    for($i = 0; $i < 10; $i++)
      {

        $address = new Address();
        $address->setStreet($i.'rue factice');
        $address->setStreetComp('complement');
        $address->setZipcode('4402'.$i);
        $address->setCity('Nantes');
        $address->setCityComp('Cedex '.$i);
        $address->setType(Address::FACTURATION);

        $contact = new Contact();
        $contact->setLastname('Dupont');
        $contact->setFirstname('François');
        $contact->setJob('Développeur niveau '.$i);
        $contact->setEmail('test'.$i.'@test.fr');
        $contact->setPhone('024051840'.$i);
        $contact->setMobile('024051840'.$i);

        


        $supplier = new Supplier();
        $supplier->setName('Fournisseur '.$i);
        $supplier->addAddress($address);
        $supplier->addContact($contact);
        $supplier->setEntrance(new \DateTime());
     
        $em->persist($supplier);
      }
     
      $em->flush();
  }
 
  public function getOrder()
  {
    return 5; // the order in which fixtures will be loaded
  }
}

?>