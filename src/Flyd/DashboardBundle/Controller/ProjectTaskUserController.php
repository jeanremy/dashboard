<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Flyd\DashboardBundle\Entity\ProjectTaskUser;
use Flyd\DashboardBundle\Form\ProjectTaskUserType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\ORM\ORMException;

class ProjectTaskUserController extends Controller
{
    /**
     * @Route("/projecttaskuser/{id}/edit")          
     */
    public function editAction(Request $request, $id)
    {
    	$request = $this->container->get('request');
		$params = $this->getRequest()->request->all();

	    if(!$request->isXmlHttpRequest()) {
            $response->setData(array(
                'code' => 500,
                'response' => 'not an ajax request'
            ));
        }


	    $response = new JsonResponse();
	    $em = $this->getDoctrine()->getManager();
	    $ptu = $em->getRepository('FlydDashboardBundle:ProjectTaskUser')->find($id);
	    $form = $this->get('form.factory')->create(new ProjectTaskUserType(), $ptu);
    	$form->handleRequest($request);

    	if ($form->isValid()) {
          	try {
				$em->persist($ptu);
				$em->flush();
				$response->setData(array(
					'code' => 200,
					'response'=> 'ok'
				));

			} catch(\Doctrine\ORM\ORMException $e) {
                $response->setData(array(
                    'code' => 500,
                    'response' => $e->getMessage()
                ));
            }
            catch(\Exception $e){
                $response->setData(array(
                    'code' => 500,
                    'response' => $e->getMessage()
                ));
            }

        }
        else {        		
    		$response->setData(array(
				'code' => 500,
				'response'=> $form->getErrors(true)
			));
        } 
        return $response;
        die();
    }


    public function getFormAction($id)
    {


    	$em = $this->getDoctrine()->getManager();
	    $ptu = $em->getRepository('FlydDashboardBundle:ProjectTaskUser')->find($id);
	    $form = $this->get('form.factory')->create(new ProjectTaskUserType(), $ptu);

	    return $this->render('FlydDashboardBundle:ProjectTaskUser:mini.html.twig', array(
          'form' => $form->createView(),
          'ptu' => $ptu
        ));

        die();
    }

}