<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Flyd\DashboardBundle\Entity\Address;
use Flyd\DashboardBundle\Form\AddressType;

class AddressController extends Controller
{
	/**
     * Add address from clients.
     *
     * @Route("/address/getform", name="address_ajax_form")
     * @Method("POST")
     * @Template("FlydDashboardBundle:Address:add.html.twig")
     */
	public function getFormAction($id)
	{
	    $address = new Address();
	    $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('FlydDashboardBundle:Company')->find($id);
        $address->setCompany($client);
        $form = $this->get('form.factory')->create(new AddressType(), $address);

		return $this->render('FlydDashboardBundle:Address:add.html.twig', array(
			'form'=> $form->createView()
		));
	}	
	/**
     * Add address from clients.
     *
     * @Route("/address/add", name="address_ajax_add")
     * @Method("POST")
     * @Template("FlydDashboardBundle:Address:add.html.twig")
     */
	public function addAction()
	{               
		$request = $this->container->get('request');
	    $response = new JsonResponse();
	    $address = new Address();
	    $em = $this->getDoctrine()->getManager();

	    if($request->isXmlHttpRequest())
	    {
	    	
        	$form = $this->get('form.factory')->create(new AddressType(), $address);

	    	if ($form->handleRequest($request)->isValid()) {
	          
				$em->persist($address);
				$em->flush();

				// get address show template ( à faire)
				$addressHtml = $this->container->get('templating')->render('FlydDashboardBundle:Address:show.html.twig', array(
					'address'=> $address
				));
				return $response->setData(array(
					'code' => 200,
					'response'=> $addressHtml
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
     * Edit address
     *
     * @Route("/address/{id}/edit", name="address_edit")
     * @Template("FlydDashboardBundle:Address:edit.html.twig")
     */
	public function editAction(Request $request, $id)
	{               
		$em = $this->getDoctrine()->getManager();

		$address = $em->getRepository('FlydDashboardBundle:Address')->find($id);


		$form = $this->get('form.factory')->create(new AddressType(), $address);

		if ($form->handleRequest($request)->isValid()) {
		  $em = $this->getDoctrine()->getManager();
		  $em->persist($address);
		  $em->flush();

		  $request->getSession()->getFlashBag()->add('notice', 'Adresse bien enregistré.');

		  return $this->redirect($this->generateUrl('client_show', array('id' => $address->getCompany()->getId())));
		}

		return array(
		  'entity' => $address,
		  'form' => $form->createView(),		  
		  'menu' => 'client'
		);
	}


    /**
	 * Deletes a Address entity.
	 *
	 * @Route("address/{id}/delete", name="address_delete")
	 * @Method("DELETE")
	 * @Template()
	 */
	public function deleteAction(Request $request, $id)
	{
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FlydDashboardBundle:Address')->find($id);


		if (null === $entity) {
			throw new NotFoundHttpException("L'adresse d'id ".$id." n'existe pas.");
		}

		// On crée un formulaire vide, qui ne contiendra que le champ CSRF
		// Cela permet de protéger la suppression d'annonce contre cette faille
		$form = $this->createFormBuilder()->getForm();

		if ($form->handleRequest($request)->isValid()) {
			$em->remove($entity);
			$em->flush();

			$request->getSession()->getFlashBag()->add('info', "L'adresse a bien été supprimé.");

			return $this->redirect($this->generateUrl('client_list'));
		}

		// Si la requête est en GET, on affiche une page de confirmation avant de supprimer
		return array(
		  'entity' => $entity,
		  'form'   => $form->createView(),
	  		'menu' => 'client'
		);
    }
}
