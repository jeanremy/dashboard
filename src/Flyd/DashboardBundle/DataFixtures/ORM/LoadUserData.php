<?php
// src/Ens/JobeetBundle/DataFixtures/ORM/LoadUserData.php
namespace Ens\JobeetBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
 
// class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
// {
//   public function load(ObjectManager $em)
//   {
//     // Get our userManager, you must implement `ContainerAwareInterface`
//     $em = $this->container->get('fos_user.user_manager');

//     // Create our user and set details
//     $user = $em->createUser();
//     $user->setUsername('username');
//     $user->setEmail('email@domain.com');
//     $user->setPlainPassword('password');
//     //$user->setPassword('3NCRYPT3D-V3R51ON');
//     $user->setEnabled(true);
//     $user->setRoles(array('ROLE_ADMIN'));

//     // Update the user
//     $em->updateUser($user, true);
//   }
 
//   public function getOrder()
//   {
//     return 7; // the order in which fixtures will be loaded
//   }
// }

?>