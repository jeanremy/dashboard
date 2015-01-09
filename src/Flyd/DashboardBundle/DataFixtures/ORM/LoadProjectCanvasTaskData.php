<?php
// src/Flyd/DashboardBundle/DataFixtures/ORM/LoadProjectCanvasTaskData.php
namespace Flyd\DashboardBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Flyd\DashboardBundle\Entity\ProjectCanvasTask;
 
class LoadProjectCanvasTaskData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {

    for ($i = 0; $i < 5; $i++) {
      for ($j = 0; $j < 5; $j++) {
        // On crée la catégorie
        $project_canvas = new ProjectCanvasTask();
        $project_canvas->setPosition($j);
        $project_canvas->setProjectCanvas($this->getReference('projectcanvas ' . $i));
        $project_canvas->setTask($this->getReference('task ' . $j));

        // On la persiste
        $em->persist($project_canvas);
      }
    }

    // On déclenche l'enregistrement de toutes les catégories
    $em->flush();
  }
 
  public function getOrder()
  {
    return 11; // the order in which fixtures will be loaded
  }
}

?>