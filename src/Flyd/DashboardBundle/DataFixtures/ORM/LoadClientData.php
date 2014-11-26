<?php
// src/Ens/JobeetBundle/DataFixtures/ORM/LoadClientData.php
namespace Ens\JobeetBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Flyd\DashboardBundle\Entity\Client;
use Flyd\DashboardBundle\Entity\Address;
use Flyd\DashboardBundle\Entity\Contact;
use Flyd\DashboardBundle\Entity\Need;
use Flyd\DashboardBundle\Entity\Origin;
 
class LoadClientData extends AbstractFixture implements OrderedFixtureInterface
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

        $need = new Need();
        $need->setTitle('Besoin 1'.$i);
        $need->setDescription('une super descriptiontrop géniale');
        $need->setStartDate(new \DateTime() );
        $need->setDeadline(new \DateTime() );
        $need->setEndDate(new \DateTime() );

        


        $client = new Client();
        $client->setName('Client '.$i);
        $client->addAddress($address);
        $client->addContact($contact);
        $client->addNeed($need);
        $client->setEntrance(new \DateTime());
        $client->setReminder(new \DateTime());
        $client->setType(Client::ACTUAL);
        //$company->addOrigin($origin);
     
        $em->persist($client);
      }
     
      $em->flush();
  }
 
  public function getOrder()
  {
    return 3; // the order in which fixtures will be loaded
  }
}

?>