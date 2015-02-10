<?php

namespace Flyd\DashboardBundle\Controller;

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
        $request = $this->container->get('request');
	    $response = new JsonResponse();
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
		$params = $this->getRequest()->request->all();
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
     * Remove address from clients.
     *
     * @Route("/address/delete", name="address_ajax_delete")
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

	               $qb->delete('FlydDashboardBundle:Address', 'a')
	                  ->where("a.id LIKE :element_id")
	                  ->setParameter('element_id', '%'.$params['element_id'].'%');

	               $query = $qb->getQuery();               
	               $results = $query->getResult();
	        }
	        else {
	            return $response->setData(array(
				    'code' => 500,
				    'response' => 'Address ID missing'
				));
	        }

	        return $response->setData(array(
			    'code' => 200,
			    'response' => 'Address deleted'
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
