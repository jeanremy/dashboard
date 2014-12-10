<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Flyd\DashboardBundle\Entity\Contact;
use Flyd\DashboardBundle\Entity\Client;
use Flyd\DashboardBundle\Form\ContactType;



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
        $request = $this->container->get('request');
	    $response = new JsonResponse();
	    $contact = new Contact();
	    $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('FlydDashboardBundle:Client')->find($id);
        $contact->setCompany($client);
        $form = $this->get('form.factory')->create(new ContactType(), $contact);

		return $this->render('FlydDashboardBundle:Contact:add.html.twig', array(
			'form'=> $form->createView()
		));
	}	


	/**
     * Add contact from clients.
     *
     * @Route("/contact/add", name="contact_ajax_add")
     * @Method("POST")
     * @Template("FlydDashboardBundle:Contact:add.html.twig")
     */
	public function addAction()
	{               
		$request = $this->container->get('request');
		$params = $this->getRequest()->request->all();
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
     * Remove contact from clients.
     *
     * @Route("/contact/delete", name="contact_ajax_delete")
     * @Method("POST")
     * @Template()
     */
	public function deleteAction()
	{               
		$request = $this->container->get('request');
		$params = $this->getRequest()->request->all();
	    $response = new JsonResponse();

	    if($request->isXmlHttpRequest())
	     {

	        $em = $this->container->get('doctrine')->getEntityManager();

	        if($params['element_id'] != '')
	        {
	               $qb = $em->createQueryBuilder();

	               $qb->delete('FlydDashboardBundle:Contact', 'a')
	                  ->where("a.id LIKE :element_id")
	                  ->setParameter('element_id', '%'.$params['element_id'].'%');

	               $query = $qb->getQuery();               
	               $results = $query->getResult();
	        }
	        else {
	            return $response->setData(array(
				    'code' => 500,
				    'response' => 'Contact ID missing'
				));
	        }

	        return $response->setData(array(
			    'code' => 200,
			    'response' => 'Contact deleted'
			));
	    }
	    else {
	        return $response->setData(array(
			    'code' => 500,
			    'response' => 'Not an ajax request',
			    'element' => $params['element_id']
			));
	    }
	}
}
