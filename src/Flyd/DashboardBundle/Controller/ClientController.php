<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Flyd\DashboardBundle\Entity\Client;
use Flyd\DashboardBundle\Entity\Contact;
use Flyd\DashboardBundle\Form\ClientType;
use Flyd\DashboardBundle\Form\EditClientType;

/**
 * Client controller.
 *
 * @Route("/")
 */
class ClientController extends Controller
{

	/**
	 * Lists all Client entities.
	 *
	 * @Route("/", name="client_list")
	 * @Method("GET")
	 */
	public function indexAction()
	{
		$em = $this->getDoctrine()->getManager();


		$entities = $em->getRepository('FlydDashboardBundle:Client')->findAll();

		return $this->render('FlydDashboardBundle:Client:index.html.twig', array(
			'entities' => $entities,
			'menu' => 'dashboard'
		));
	}



	/**
	 * Displays a form to create a new Client entity.
	 *
	 * @Route("/client/add", name="client_add")
	 * @Method("GET")
	 * @Template("FlydDashboardBundle:Client:add.html.twig")
	 */
	public function addAction(Request $request)
	{
		$client = new Client();

		$form = $this->get('form.factory')->create(new ClientType(), $client);

		if ($form->handleRequest($request)->isValid()) {
		  $em = $this->getDoctrine()->getManager();
		  $em->persist($client);
		  $em->flush();

		  $request->getSession()->getFlashBag()->add('notice', 'Client bien enregistré.');

		  return $this->redirect($this->generateUrl('client_show', array('id' => $client->getId())));
		}

		return $this->render('FlydDashboardBundle:Client:add.html.twig', array(
		  'form' => $form->createView(),
		  'menu' => 'client'
		));
	}

	/**
	 * Finds and displays a Client entity.
	 *
	 * @Route("/client/{id}", name="client_show")
	 * @Method("GET")
	 * @Template()
	 */
	public function showAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$entity = $em->getRepository('FlydDashboardBundle:Client')->find($id);

		if (!$entity) {
			throw $this->createNotFoundException('Unable to find Client entity.');
		}

		return $this->render('FlydDashboardBundle:Client:show.html.twig', array(
			'entity' => $entity,
		  	'menu' => 'client'
		));
	}

	/**
	 * Displays a form to edit an existing Client entity.
	 *
	 * @Route("/client/{id}/edit", name="client_edit")
	 * @Method("GET")
	 * @Template()
	 */
	public function editAction(Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();

		$client = $em->getRepository('FlydDashboardBundle:Client')->find($id);


		$form = $this->get('form.factory')->create(new ClientType(), $client);

		if ($form->handleRequest($request)->isValid()) {
		  $em = $this->getDoctrine()->getManager();
		  $em->persist($client);
		  $em->flush();

		  $request->getSession()->getFlashBag()->add('notice', 'Client bien enregistré.');

		  return $this->redirect($this->generateUrl('client_show', array('id' => $client->getId())));
		}

		return $this->render('FlydDashboardBundle:Client:edit.html.twig', array(
		  'entity' => $client,
		  'form' => $form->createView(),		  
		  'menu' => 'client'
		));
	}


  
	
	/**
	 * Deletes a Client entity.
	 *
	 * @Route("client/{id}/delete", name="client_delete")
	 * @Method("DELETE")
	 */
	public function deleteAction(Request $request, $id)
	{
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FlydDashboardBundle:Client')->find($id);


		if (null === $entity) {
		throw new NotFoundHttpException("Le client d'id ".$id." n'existe pas.");
		}

		// On crée un formulaire vide, qui ne contiendra que le champ CSRF
		// Cela permet de protéger la suppression d'annonce contre cette faille
		$form = $this->createFormBuilder()->getForm();

		if ($form->handleRequest($request)->isValid()) {
			$em->remove($entity);
			$em->flush();

			$request->getSession()->getFlashBag()->add('info', "Le client a bien été supprimé.");

			return $this->redirect($this->generateUrl('client_list'));
		}

		// Si la requête est en GET, on affiche une page de confirmation avant de supprimer
		return $this->render('FlydDashboardBundle:Client:delete.html.twig', array(
			  'entity' => $entity,
			  'form'   => $form->createView(),
		  		'menu' => 'client'
			));

    }

}
