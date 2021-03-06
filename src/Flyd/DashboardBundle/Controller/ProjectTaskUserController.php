<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Flyd\DashboardBundle\Form\Type\ProjectTaskUserType;
use Doctrine\ORM\ORMException;

class ProjectTaskUserController extends Controller
{
    /**
     * @Route("/projecttaskuser/{id}/edit")          
     */
    public function editAction(Request $request, $id)
    {
    	$request = $this->container->get('request');

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

        try {
            $form->handleRequest($request);
        } catch(\Doctrine\ORM\ORMException $e) {
            return $response->setData(array(
                'code' => 500,
                'response' => $e->getMessage()
            ));
        }
        catch(\Exception $e){
            return $response->setData(array(
                'code' => 500,
                'response' => $e->getMessage()
            ));
        }

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

    }

    public function getFirstPendingTaskAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $lastptu = $em->getRepository('FlydDashboardBundle:ProjectTaskUser')->getFirstPendingTask($id);
        if($lastptu) {
           return new Response('<p class="pending">'.$lastptu->getTask()->getStep() . ' > '. $lastptu->getTask()->getName() .'</p>' );
        } else {
           return new Response('');
        }
    }

    public function getFirstComingTaskAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $lastptu = $em->getRepository('FlydDashboardBundle:ProjectTaskUser')->getFirstComingTask($id);
        if($lastptu) {
           return new Response('<p class="coming">'.$lastptu->getTask()->getStep() . ' > '. $lastptu->getTask()->getName() .'</p>' );
        } else {
           return new Response('');
        }
    }


    

}
