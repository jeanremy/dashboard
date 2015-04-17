<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Flyd\DashboardBundle\Entity\ProjectCanvas;
use Flyd\DashboardBundle\Form\Type\ProjectCanvasTaskType;
use Flyd\DashboardBundle\Form\Type\ProjectCanvasType;
use Flyd\DashboardBundle\Entity\ProjectCanvasTask;
use Flyd\DashboardBundle\Entity\Task;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * ProjectCanvas controller.
 *
 * @Route("/project")
 */
class ProjectCanvasController extends Controller
{

    /**
     * Lists all ProjectCanvas entities.
     *
     * @Route("/projectcanvas", name="projectcanvas_list")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FlydDashboardBundle:ProjectCanvas')->findAll();

        return array(
            'entities' => $entities,
            'menu' => 'projectcanvas'
        );
    }

    /**
     * Creates a new ProjectCanvas entity.
     *
     * @Route("/projectcanvas/add", name="projectcanvas_add")
     * @Template()
     */
    public function addAction(Request $request)
    {
        $projectcanvas = new ProjectCanvas();
        $em = $this->getDoctrine()->getManager();

        $form = $this->get('form.factory')->create(new ProjectCanvasType(), $projectcanvas);
        if ($form->handleRequest($request)->isValid()) {
          $em->persist($projectcanvas);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Modèle de projet bien enregistré.');

          return $this->redirect($this->generateUrl('projectcanvas_show', array('id' => $projectcanvas->getId())));
        }

        return array(
            'form' => $form->createView(),
            'entity' => $projectcanvas,
            'menu' => 'projectcanvas'
        );
    }

    


    /**
     * Finds and displays a ProjectCanvas entity.
     *
     * @Route("/projectcanvas/{id}", name="projectcanvas_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FlydDashboardBundle:ProjectCanvas')->find($id);
        $pctlength = $entity->getProjectCanvasTasks();
        $pct = new ProjectCanvasTask();
        $pct->setPosition(count($pctlength) +1);

        $pctform = $this->get('form.factory')->create(new ProjectCanvasTaskType(), $pct);
        $minitasks = $em->getRepository('FlydDashboardBundle:Task')->getTaskIdentifiers();


        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProjectCanvas entity.');
        }

        return array(
            'entity' => $entity,          
            'pctform' => $pctform->createView(),
            'minitasks' => $minitasks,          
            'menu' => 'projectcanvas'
        );
    }

    /**
     * Displays a form to edit an existing ProjectCanvas entity.
     *
     * @Route("projectcanvas/{id}/edit", name="projectcanvas_edit")
     * @Template()
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $projectcanvas = $em->getRepository('FlydDashboardBundle:ProjectCanvas')->find($id);
        $pctlength = $projectcanvas->getProjectCanvasTasks();
        
        $pct = new ProjectCanvasTask();
        $pct->setPosition(count($pctlength) +1);

        $form = $this->get('form.factory')->create(new ProjectCanvasType(), $projectcanvas);
        $pctform = $this->get('form.factory')->create(new ProjectCanvasTaskType(), $pct);
        $minitasks = $em->getRepository('FlydDashboardBundle:Task')->getTaskIdentifiers();



        if ($form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($projectcanvas);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Modèle de projet bien enregistré.');

          return $this->redirect($this->generateUrl('projectcanvas_show', array('id' => $projectcanvas->getId())));
        }

        return array(
            'entity' => $projectcanvas,
            'form' => $form->createView(),
            'pctform' => $pctform->createView(),
            'minitasks' => $minitasks,
            'menu' => 'projectcanvas'
        );
    }

    /**
     * Delete a ProjectCanvas entity.
     *
     * @Route("projectcanvas/{id}/delete", name="projectcanvas_delete")
     * @Template()
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FlydDashboardBundle:ProjectCanvas')->find($id);


        if (null === $entity) {
            throw new NotFoundHttpException("Le projet d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($entity);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', "Le modèle de projet a bien été supprimé.");

            return $this->redirect($this->generateUrl('projectcanvas_list'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'menu' => 'projectcanvas'
        );

    }

    /**
     * Add a task entity.
     *
     * @Method("POST")
     */
    public function ajaxAddTaskAction(Request $request, $id)
    {
        $response = new JsonResponse();
        
        if(!$request->isXmlHttpRequest()) {
            return $response->setData(array(
                'code' => 500,
                'response' => 'not an ajax request'
            ));
        }

        $em = $this->getDoctrine()->getManager();        
        $projectcanvas = $em->getRepository('FlydDashboardBundle:ProjectCanvas')->find($id);
        $pct = new ProjectCanvasTask();
        $pct->setProjectCanvas($projectcanvas);
        $request = $this->container->get('request');
        $params = $this->getRequest()->request->all();

        // Si tache existante
        if($params['task_id']) {
            $task = $em->getRepository('FlydDashboardBundle:Task')->find($params['task_id']);
            $pct->setTask($task);
        }else {
            $task = new Task();
        }

        $form = $this->get('form.factory')->create(new ProjectCanvasTaskType(), $pct);

        if ($form->handleRequest($request)->isValid()) {
            try {                
                $em->persist($pct);
                $projectcanvas->addProjectCanvasTask($pct);
                $em->persist($projectcanvas);
                $em->flush();

                $response->setData(array(
                    'code' => 200,
                    'response' => $this->renderView('FlydDashboardBundle:ProjectCanvasTask:mini.html.twig', array(
                          'pct' => $pct
                        ))
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
        } else {
            $response->setData(array(
                    'code' => 500,
                    'response' => $form->getErrors(true)
                ));
        }
        return $response;
    }

    /**
     * Delete a task entity.
     *
     * @Method("POST")
     */
    public function ajaxDeleteTaskAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $response = new JsonResponse();
        $request = $this->container->get('request');
        $params = $this->getRequest()->request->all();
        if(!$request->isXmlHttpRequest() || !$params['pct_id']) {
            return $response->setData(array(
                'code' => 500,
                'response' => 'not an ajax request'
            ));
        }
        try {            
            $pct = $em->getRepository('FlydDashboardBundle:ProjectCanvasTask')->find($params['pct_id']);
            $em->remove($pct);
            $em->flush();

            $response->setData(array(
                'code' => 200,
                'response' => $pct->getId()
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
       
        return $response;
    }

    /**
     * Reorder tasks.
     *
     * @Method("POST")
     */
    public function ajaxReorderTasksAction(Request $request, $id)
    {
        $response = new JsonResponse();
        $em = $this->getDoctrine()->getManager();    
        $params = $this->getRequest()->request->all();
        try {      
            $i = 1;
            foreach ($params['pct'] as $pctid) {
                $pct = $em->getRepository('FlydDashboardBundle:ProjectCanvasTask')->find($pctid);
                $pct->setPosition($i);
                $em->persist($pct);
                $i++;
            }    
            $em->flush();

            $response->setData(array(
                'code' => 200,
                'response' => $params['pct']
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
        return $response;
    }
}
