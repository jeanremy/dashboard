<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;



class ContactController extends Controller
{
	public function removeAction()
	{               
		$request = $this->container->get('request');
		$params = $this->getRequest()->request->all();
	    $response = new JsonResponse();

	    if($request->isXmlHttpRequest())
	     {

	        $em = $this->container->get('doctrine')->getEntityManager();

	        if($params['contact_id'] != '')
	        {
	               $qb = $em->createQueryBuilder();

	               $qb->delete('FlydDashboardBundle:Contact', 'a')
	                  ->where("a.id LIKE :contact_id")
	                  ->setParameter('contact_id', '%'.$params['contact_id'].'%');

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
			    'contact' => $params['contact_id']
			));
	    }
	}
}
