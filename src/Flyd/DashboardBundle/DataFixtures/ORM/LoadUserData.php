<?php
// src/Flyd/DashboardBundle/DataFixtures/ORM/LoadUserData.php
namespace Flyd\DashboardBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
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
    // Get our userManager, you must implement `ContainerAwareInterface`
    $em = $this->container->get('fos_user.user_manager');

    // Create our user and set details
    $user = $em->createUser();
    $user->setUsername('username');
    $user->setEmail('email@domain.com');
    $user->setPlainPassword('password');
    //$user->setPassword('3NCRYPT3D-V3R51ON');
    $user->setEnabled(true);
    $user->setRoles(array('ROLE_ADMIN'));
    $user->setJob('jongleur');

    // Update the user
    $em->updateUser($user, true);
  }
 
  public function getOrder()
  {
    return 8; // the order in which fixtures will be loaded
  }
}

?>