<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class AddressController extends Controller
{
	public function removeAction()
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
