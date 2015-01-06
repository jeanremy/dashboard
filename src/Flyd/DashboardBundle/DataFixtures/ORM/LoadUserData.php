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
    $user->setUsername('pf');
    $user->setEmail('pf@flydesigners.com');
    $user->setPlainPassword('pf');
    //$user->setPassword('3NCRYPT3D-V3R51ON');
    $user->setEnabled(true);
    $user->setRoles(array('ROLE_ADMIN'));
    $user->setJob('Directeur');
    $this->setReference('user', $user);

    // Update the user
    $em->updateUser($user, true);

    // Create our user and set details
    $user2 = $em->createUser();
    $user2->setUsername('Anaïs');
    $user2->setEmail('anais@flydesigners.com');
    $user2->setPlainPassword('anais');
    //$user2->setPassword('3NCRYPT3D-V3R51ON');
    $user2->setEnabled(true);
    $user2->setRoles(array('ROLE_ADMIN'));
    $user2->setJob('chargée de projet');

    // Update the user
    $em->updateUser($user2, true);

    // Create our user and set details
    $user3 = $em->createUser();
    $user3->setUsername('Jo');
    $user3->setEmail('jonathan@flydesigners.com');
    $user3->setPlainPassword('jonathan');
    //$user3->setPassword('3NCRYPT3D-V3R51ON');
    $user3->setEnabled(true);
    $user3->setRoles(array('ROLE_ADMIN'));
    $user3->setJob('Directeur Artistique');

    // Update the user
    $em->updateUser($user3, true);

    // Create our user and set details
    $user4 = $em->createUser();
    $user4->setUsername('Sarah');
    $user4->setEmail('sarah@flydesigners.com');
    $user4->setPlainPassword('sarah');
    //$user4->setPassword('3NCRYPT3D-V3R51ON');
    $user4->setEnabled(true);
    $user4->setRoles(array('ROLE_ADMIN'));
    $user4->setJob('chargée de projet');

    // Update the user
    $em->updateUser($user4, true);

    // Create our user and set details
    $user5 = $em->createUser();
    $user5->setUsername('Romain');
    $user5->setEmail('romain@flydesigners.com');
    $user5->setPlainPassword('romain');
    //$user5->setPassword('3NCRYPT3D-V3R51ON');
    $user5->setEnabled(true);
    $user5->setRoles(array('ROLE_ADMIN'));
    $user5->setJob('motion designer');

    // Update the user
    $em->updateUser($user5, true);

    // Create our user and set details
    $user6 = $em->createUser();
    $user6->setUsername('JR');
    $user6->setEmail('jeanremy@flydesigners.com');
    $user6->setPlainPassword('jr');
    //$user6->setPassword('3NCRYPT3D-V3R51ON');
    $user6->setEnabled(true);
    $user6->setRoles(array('ROLE_ADMIN'));
    $user6->setJob('developpeur');

    // Update the user
    $em->updateUser($user6, true);
  }
 
  public function getOrder()
  {
    return 4; // the order in which fixtures will be loaded
  }
}

?>