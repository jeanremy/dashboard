<?php
// src/Flyd/DashboardBundle/DataFixtures/ORM/LoadCategoryData.php
namespace Flyd\DashboardBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Flyd\DashboardBundle\Entity\Category;
 
class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $names = array(
      'Print',
      'Motion',
      'Web'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $category = new Category();
      $category->setName($name);
      $this->setReference('category', $category);

      // On la persiste
      $em->persist($category);
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