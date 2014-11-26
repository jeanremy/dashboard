<?php
// src/Ens/JobeetBundle/DataFixtures/ORM/LoadProjectCanvasData.php
namespace Ens\JobeetBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Flyd\DashboardBundle\Entity\ProjectCanvas;
 
class LoadProjectCanvasData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $names = array(
      'Projet Web',
      'Motion',
      'Plaquette',
      'Soirées Queen'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $project_canvas = new ProjectCanvas();
      $project_canvas->setName($name);

      // On la persiste
      $em->persist($project_canvas);
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