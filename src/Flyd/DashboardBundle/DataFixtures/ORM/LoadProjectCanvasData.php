<?php
// src/Flyd/DashboardBundle/DataFixtures/ORM/LoadProjectCanvasData.php
namespace Flyd\DashboardBundle\DataFixtures\ORM;
 
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
      'Soirées Queen',
      'Soirées raclettes'
    );

    for ($i = 0; $i < count($names); $i++) {
      // On crée la catégorie
      $project_canvas = new ProjectCanvas();
      $project_canvas->setName($names[$i]);
      $this->setReference('projectcanvas '.$i, $project_canvas);

      // On la persiste
      $em->persist($project_canvas);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $em->flush();
  }
 
  public function getOrder()
  {
    return 10; // the order in which fixtures will be loaded
  }
}

?>