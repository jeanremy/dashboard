<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Flyd\DashboardBundle\Entity\Need;
use Flyd\DashboardBundle\Entity\Client;
use Flyd\DashboardBundle\Form\NeedType;

class NeedController extends Controller
{
	public function addAction(Request $request, $id)
	{
		$need = new Need();
		$em = $this->getDoctrine()->getManager();
		$client = $em->getRepository('FlydDashboardBundle:Client')->find($id);

		$need->setStartDate(new \DateTime() );
		$need->setClient($client);


		$form = $this->get('form.factory')->create(new NeedType(), $need);

		if ($form->handleRequest($request)->isValid()) {
		  $em = $this->getDoctrine()->getManager();
		  $em->persist($need);
		  $em->flush();

		  $request->getSession()->getFlashBag()->add('notice', 'Besoin bien enregistré.');

		  return $this->redirect($this->generateUrl('need_show', array('id' => $need->getId())));
		}

		return $this->render('FlydDashboardBundle:Need:add.html.twig', array(
		  'form' => $form->createView(),
		  'entity' => $need
		));
	}

	public function ajaxAddAction()
	{
		$request = $this->container->get('request');
		$params = $this->getRequest()->request->all();
	    $response = new JsonResponse();
	    $need = new Need();
	    $em = $this->getDoctrine()->getManager();

	    if($request->isXmlHttpRequest())
	    {
	    	
        	$form = $this->get('form.factory')->create(new NeedType(), $need);

	    	if ($form->handleRequest($request)->isValid()) {
	          
				$em->persist($need);
				$em->flush();

				// get need show template
				$needHtml = $this->container->get('templating')->render('FlydDashboardBundle:Need:mini.html.twig', array(
					'need'=> $need
				));
				return $response->setData(array(
					'code' => 200,
					'response'=> $needHtml
				));
	        }
	        else {
        		$errors = $form->getErrors();
	        	return $response->setData(array(
					'code' => 500,
					'response'=> $errors
				));
	        }
		}
	}

	public function showAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$entity = $em->getRepository('FlydDashboardBundle:Need')->find($id);

		if (!$entity) {
			throw $this->createNotFoundException('Unable to find Need entity.');
		}

		return $this->render('FlydDashboardBundle:Need:show.html.twig', array(
			'entity' => $entity
		));
	}

	 public function editAction(Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();

		$need = $em->getRepository('FlydDashboardBundle:Need')->find($id);


		$form = $this->get('form.factory')->create(new NeedType(), $need);

		if ($form->handleRequest($request)->isValid()) {
		  $em = $this->getDoctrine()->getManager();
		  $em->persist($need);
		  $em->flush();

		  $request->getSession()->getFlashBag()->add('notice', 'Besoin bien enregistré.');

		  return $this->redirect($this->generateUrl('need_show', array('id' => $id)));
		}

		return $this->render('FlydDashboardBundle:Need:edit.html.twig', array(
		  'entity' => $need,
		  'form' => $form->createView()
		));
	}

  
	public function deleteAction(Request $request, $id)
	{
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FlydDashboardBundle:Need')->find($id);


		if (null === $entity) {
		throw new NotFoundHttpException("Le besoin d'id ".$id." n'existe pas.");
		}

		// On crée un formulaire vide, qui ne contiendra que le champ CSRF
		// Cela permet de protéger la suppression d'annonce contre cette faille
		$form = $this->createFormBuilder()->getForm();

		if ($form->handleRequest($request)->isValid()) {
			$em->remove($entity);
			$em->flush();

			$request->getSession()->getFlashBag()->add('info', "Le besoin a bien été supprimé.");

			return $this->redirect($this->generateUrl('client_list'));
		}

		// Si la requête est en GET, on affiche une page de confirmation avant de supprimer
		return $this->render('FlydDashboardBundle:Need:delete.html.twig', array(
			  'entity' => $entity,
			  'form'   => $form->createView()
			));

    }

	

	public function getFormAction($id)
	{
        $request = $this->container->get('request');
	    $response = new JsonResponse();
	    $need = new Need();
	    $need->setStartDate(new \DateTime() );
		$need->setDeadline(new \DateTime('+1 month') );
		$need->setEndDate(new \DateTime('+1 month') );

	    $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('FlydDashboardBundle:Client')->find($id);
        $need->setClient($client);
        $form = $this->get('form.factory')->create(new NeedType(), $need);

		return $this->render('FlydDashboardBundle:Need:ajaxadd.html.twig', array(
			'form'=> $form->createView()
		));
	}	
}
