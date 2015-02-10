<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Flyd\DashboardBundle\Entity\Need;
use Flyd\DashboardBundle\Form\NeedType;

class NeedController extends Controller
{

	/**
	 * Lists all needs of a client
	 *
	 * @Route("/needs", name="need_list")
	 * @Method("GET")
	 * @Template()
	 */
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

		return array(
		  'form' => $form->createView(),
		  'entity' => $need,
		  'menu' => 'client'
		);
	}

	/**
	 * Add in ajax.
	 *
	 * @Route("/need/ajaxadd", name="need_ajax_add")
	 * @Method("POST")
	 */
	public function ajaxAddAction()
	{
		$request = $this->container->get('request');
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


	/**
	 * Show a need
	 *
	 * @Route("/need/{id}", name="need_show")
	 * @Method("GET")
	 * @Template()
	 */
	public function showAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$entity = $em->getRepository('FlydDashboardBundle:Need')->find($id);

		if (!$entity) {
			throw $this->createNotFoundException('Unable to find Need entity.');
		}

		return array(
			'entity' => $entity,
		  	'menu' => 'client'
		);
	}


	/**
	 * Edit a need
	 *
	 * @Route("/need/{id}/edit", name="need_edit")
	 * @Template()
	 */
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

		return array(
		  'entity' => $need,
		  'form' => $form->createView(),
		  'menu' => 'client'
		);
	}

  	/**
	 * Delete a need
	 *
	 * @Route("/need/{id}", name="need_show")
	 * @Template()
	 */
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
		return array(
		  'entity' => $entity,
		  'form'   => $form->createView(),
	  		'menu' => 'client'
		);

    }

	

	public function getFormAction($id)
	{
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
