<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Flyd\DashboardBundle\Entity\Company;
use Flyd\DashboardBundle\Entity\Address;

class HomeController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$companies = $em->getRepository('FlydDashboardBundle:Company')->findAll();

        return $this->render('FlydDashboardBundle:Default:index.html.twig', array(
        	'companies' => $companies
        ));
    }
}
