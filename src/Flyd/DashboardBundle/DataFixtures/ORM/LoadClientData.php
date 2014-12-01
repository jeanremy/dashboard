<?php
// src/Ens/JobeetBundle/DataFixtures/ORM/LoadClientData.php
namespace Ens\JobeetBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Flyd\DashboardBundle\Entity\Client;
use Flyd\DashboardBundle\Entity\Contact;
 
class LoadClientData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    

    for ($i = 0; $i < 10; $i++) {
      // On crée la catégorie

      $contact = new Contact();
      $contact->setFirstname('Contact '.$i);
      $contact->setLastname('Contact last');
      $contact->setEmail('tw@tw.fr');
      $contact->setJob('Maçon');
      $contact->setPhone('0241857845');
      $contact->setMobile('0241857845');

      $client = new Client();
      $client->setName('Client '.$i);
      $client->setReminder(new \DateTime());
      $client->setEntrance(new \DateTime());
      $client->setType(Client::ACTUAL);
      $client->addContact($contact );
      $em->persist($client);

      // On la persiste
      $em->persist($client);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $em->flush();
  }
 
  public function getOrder()
  {
    return 2; // the order in which fixtures will be loaded
  }
}

?>