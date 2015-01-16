<?php
// src/Flyd/DashboardBundle/DataFixtures/ORM/LoadImageData.php
namespace Flyd\DashboardBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Flyd\DashboardBundle\Entity\Image;

class LoadImageData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function setContainer(ContainerInterface $container = null)
	{
	    $this->container = $container;
	}

	public function load(ObjectManager $em)
	{
		copy(__DIR__.'/../../../../../web/uploads/placeholder.jpeg',__DIR__.'/../../../../../web/uploads/tempplaceholder.jpeg');
		$file = new UploadedFile(__DIR__.'/../../../../../web/uploads/tempplaceholder.jpeg', 'placeholder.jpg', null, null, null, true);
		$image = new Image();
		$image->setFile($file);
		$em->persist($image);
		$this->setReference('placeholder', $image);
		$em->flush();
	}

	public function getOrder()
	{
		return 5; // the order in which fixtures will be loaded
	}
}

?>
