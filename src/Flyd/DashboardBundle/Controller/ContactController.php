<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Flyd\DashboardBundle\Entity\Contact;
use Flyd\DashboardBundle\Form\Type\ContactType;



class ContactController extends Controller
{
	/**
     * Add contact from clients.
     *
     * @Route("/contact/getform", name="contact_ajax_form")
     * @Method("POST")
     * @Template("FlydDashboardBundle:Contact:add.html.twig")
     */
	public function getFormAction($id)
	{
	    $contact = new Contact();
	    $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('FlydDashboardBundle:Company')->find($id);
        $contact->setCompany($client);
        $form = $this->get('form.factory')->create(new ContactType(), $contact);

		return array(
			'form'=> $form->createView()
		);
	}	


	/**
     * Add contact from clients.
     *
     * @Route("/contact/add", name="contact_ajax_add")
     * @Method("POST")
     */
	public function addAction()
	{               
		$request = $this->container->get('request');
	    $response = new JsonResponse();
	    $contact = new Contact();
	    $em = $this->getDoctrine()->getManager();

	    if($request->isXmlHttpRequest())
	    {
	    	
        	$form = $this->get('form.factory')->create(new ContactType(), $contact);

	    	if ($form->handleRequest($request)->isValid()) {
	          
				$em->persist($contact);
				$em->flush();

				// get contact show template ( à faire)
				$contactHtml = $this->container->get('templating')->render('FlydDashboardBundle:Contact:show.html.twig', array(
					'contact'=> $contact
				));
				return $response->setData(array(
					'code' => 200,
					'response'=> $contactHtml
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
     * Edit contact
     *
     * @Route("/contact/{id}/edit", name="contact_edit")
     * @Template("FlydDashboardBundle:Contact:edit.html.twig")
     */
	public function editAction(Request $request, $id)
	{               
		$em = $this->getDoctrine()->getManager();

		$contact = $em->getRepository('FlydDashboardBundle:Contact')->find($id);


		$form = $this->get('form.factory')->create(new ContactType(), $contact);

		if ($form->handleRequest($request)->isValid()) {
		  $em = $this->getDoctrine()->getManager();
		  $em->persist($contact);
		  $em->flush();

		  $request->getSession()->getFlashBag()->add('notice', 'Adresse bien enregistré.');

		  return $this->redirect($this->generateUrl('client_show', array('id' => $contact->getCompany()->getId())));
		}

		return array(
		  'entity' => $contact,
		  'form' => $form->createView(),		  
		  'menu' => 'client'
		);
	}


    /**
	 * Deletes a Contact entity.
	 *
	 * @Route("contact/{id}/delete", name="contact_delete")
	 * @Method("DELETE")
	 * @Template()
	 */
	public function deleteAction(Request $request, $id)
	{
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FlydDashboardBundle:Contact')->find($id);


		if (null === $entity) {
			throw new NotFoundHttpException("Le contact d'id ".$id." n'existe pas.");
		}

		// On crée un formulaire vide, qui ne contiendra que le champ CSRF
		// Cela permet de protéger la suppression d'annonce contre cette faille
		$form = $this->createFormBuilder()->getForm();

		if ($form->handleRequest($request)->isValid()) {
			$em->remove($entity);
			$em->flush();

			$request->getSession()->getFlashBag()->add('info', "Le contact a bien été supprimé.");

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
