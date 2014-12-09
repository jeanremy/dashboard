<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
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
	public function getFormAction()
	{
        $request = $this->container->get('request');
	    $response = new JsonResponse();
	    $address = new Address();
        $form = $this->get('form.factory')->create(new AddressType(), $address);

		return $this->render('FlydDashboardBundle:Address:add.html.twig', array(
			'form'=> $form->createView()
		));

	    /*if($request->isXmlHttpRequest())
	    {						
	        $em = $this->container->get('doctrine')->getEntityManager();
	        $response_form = $this->container->get('templating')->render('FlydDashboardBundle:Address:add.html.twig', array(
				'form'=> $form->createView()
			));

			return $response->setData(array(
				'code' => 200,
				'response'=> $response_form
			));
		}*/
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

	    if($request->isXmlHttpRequest())
	    {
	    	$address->setStreet($params['street']);
	    	$address->setStreetComp($params['streetComp']);
	    	$address->setZipcode($params['zipcode']);
	    	$address->setCity($params['city']);
	    	$address->setCityComp($params['cityComp']);
        	
        	$form = $this->get('form.factory')->create(new AddressType(), $address);

	    	if ($form->handleRequest($request)->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($client);
				$em->flush();

				// get address show template ( à faire)
				$addressHtml = $this->container->get('templating')->render('FlydDashboardBundle:Address:show.html.twig', array(
					'address'=> $address
				));
				return $response->setData(array(
					'code' => 200,
					'response'=> $addressHtml
				));
	          

	            return $this->redirect($this->generateUrl('oc_platform_view', array('id' => $client->getId())));
	        }
	    	// validation of the form
								
	        $em = $this->container->get('doctrine')->getEntityManager();
	        $response_form = $this->container->get('templating')->render('FlydDashboardBundle:Address:add.html.twig', array(
				'form'=> $form->createView()
			));

			return $response->setData(array(
				'code' => 200,
				'response'=> $response_form
			));
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
