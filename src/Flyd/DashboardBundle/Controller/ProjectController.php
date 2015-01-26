<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Flyd\DashboardBundle\Entity\Project;
use Flyd\DashboardBundle\Entity\ProjectTaskUser;
use Flyd\DashboardBundle\Entity\ProjectCanvas;
use Flyd\DashboardBundle\Entity\Supplier;
use Flyd\DashboardBundle\Entity\User;
use Flyd\DashboardBundle\Entity\Task;
use Flyd\DashboardBundle\Form\ProjectType;
use Flyd\DashboardBundle\Form\ProjectEditType;
use Flyd\DashboardBundle\Form\ProjectTaskUserType;
use Flyd\DashboardBundle\Form\ProjectTaskUserMiniType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Project controller.
 *
 * @Route("/project")
 */
class ProjectController extends Controller
{

    /**
     * Lists all Project entities.
     *
     * @Route("/", name="project_list")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FlydDashboardBundle:Project')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Project entity.
     *
     * @Route("/", name="project_add")
     * @Method("POST")
     * @Template("FlydDashboardBundle:Project:add.html.twig")
     */
    public function addAction(Request $request, $id)
    {
        $project = new Project();
        $em = $this->getDoctrine()->getManager();
        $need = $em->getRepository('FlydDashboardBundle:Need')->find($id);

        $project->setStartDate(new \DateTime() );
        $project->setDeadline(new \DateTime('+1 month') );
        $project->setEndDate(new \DateTime('+1 month') );

        // Default values (besoin)
        $project->setNeed($need);

        $form = $this->get('form.factory')->create(new ProjectType(), $project);

        if ($form->handleRequest($request)->isValid()) {

            // Persist pour ajouter ensuite des ptu
            $em->persist($project);
            $em->flush();

            $projectcanvas = $project->getProjectCanvas();
            $pcts = $projectcanvas->getProjectCanvasTasks();
            foreach ($pcts as $pct) {
                $ptu = new ProjectTaskUser();
                $ptu->setProject($project);
                $ptu->setPosition($pct->getPosition());
                $ptu->setTask($pct->getTask());
                $em->persist($ptu);
                $project->addProjectTaskUser($ptu);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($project);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Projet bien enregistré.');

            return $this->redirect($this->generateUrl('project_show', array('id' => $project->getId())));
        }

        return $this->render('FlydDashboardBundle:Project:add.html.twig', array(
          'form' => $form->createView(),
          'entity' => $project
        ));
    }

    


    /**
     * Finds and displays a Project entity.
     *
     * @Route("/{id}", name="project_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FlydDashboardBundle:Project')->find($id);
        $ptus = $entity->getProjectTaskUsers();
        $forms = array();

        foreach ($ptus as $ptu) {
            $form = $this->get('form.factory')->create(new ProjectTaskUserType(), $ptu);
            array_push($forms, $form->createView() );
        }

        // For new ptu form
        $ptulength = $entity->getProjectTaskUsers();
        $ptu = new ProjectTaskUser();
        $ptu->setPosition(count($ptulength) +1);
        $ptuform = $this->get('form.factory')->create(new ProjectTaskUserMiniType(), $ptu);

        $minitasks = $em->getRepository('FlydDashboardBundle:Task')->getTaskIdentifiers();


        //Get all users of a project

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Project entity.');
        }

        return $this->render('FlydDashboardBundle:Project:show.html.twig', array(
          'entity' => $entity,
          'forms' => $forms,
          'ptuform' => $ptuform->createView(),
          'minitasks' => $minitasks
        ));
    }

    /**
     * Displays a form to edit an existing Project entity.
     *
     * @Route("/{id}/edit", name="project_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $project = $em->getRepository('FlydDashboardBundle:Project')->find($id);


        $form = $this->get('form.factory')->create(new ProjectEditType(), $project);

        if ($form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($project);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Project bien enregistré.');

          return $this->redirect($this->generateUrl('project_show', array('id' => $project->getId())));
        }

        return $this->render('FlydDashboardBundle:Project:edit.html.twig', array(
          'entity' => $project,
          'form' => $form->createView()
        ));
    }

   
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FlydDashboardBundle:Project')->find($id);


        if (null === $entity) {
            throw new NotFoundHttpException("Le projet d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($entity);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "Le projet a bien été supprimé.");

            return $this->redirect($this->generateUrl('client_list'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('FlydDashboardBundle:Project:delete.html.twig', array(
              'entity' => $entity,
              'form'   => $form->createView()
            ));

    }

    public function ajaxAddSupplierAction($id)
    {
        // A FAIRE > protection CSFR...
        $request = $this->container->get('request');
        $params = $this->getRequest()->request->all();
        $response = new JsonResponse();
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('FlydDashboardBundle:Project')->find($id);

        if($request->isXmlHttpRequest())
        {
            if($params)
            {
                try {
                    // TAF Faire une requete plsu légère
                    $supplier = $em->getRepository('FlydDashboardBundle:Supplier')->find($params['supplier_id']);
                    $project->addSupplier($supplier);
                    $em->persist($project);
                    $em->flush();
                    $response->setData(array(
                        'code' => 200,
                        'response' => $this->renderView('FlydDashboardBundle:Supplier:mini.html.twig', array(
                          'supplier' => $supplier,
                          'entity' => $project
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
            }
            else {
                $response->setData(array(
                    'code' => 500,
                    'response' => 'Supplier missing'
                ));
            }

        } else {
            $response->setData(array(
                'code' => 500,
                'response' => 'Not an ajax request'
            ));            
        }
        return $response;
    }


    public function ajaxRemoveSupplierAction($id)
    {
        $request = $this->container->get('request');
        $params = $this->getRequest()->request->all();
        $response = new JsonResponse();
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('FlydDashboardBundle:Project')->find($id);

        if($request->isXmlHttpRequest())
        {
            if($params)
            {
                try {
                    $supplier = $em->getRepository('FlydDashboardBundle:Supplier')->find($params['element_id']);
                    $project->removeSupplier($supplier);
                    $em->persist($project);
                    $em->flush();
                    $response->setData(array(
                        'code' => 200,
                        'response' => 'Fournisseur bien retiré.'
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
                    'response' => 'Fournisseur manquant.'
                ));
            }

        } else {
            $response->setData(array(
                'code' => 500,
                'response' => 'Not an ajax request'
            ));            
        }
        return $response;
    }

    public function ajaxAddUserAction($id)
    {
        $request = $this->container->get('request');
        $params = $this->getRequest()->request->all();
        $response = new JsonResponse();
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('FlydDashboardBundle:Project')->find($id);
 

        if($request->isXmlHttpRequest())
        {
            if($params)
            {
                try {
                    $user = $em->getRepository('FlydDashboardBundle:User')->find($params['user_id']);
                    $project->addUser($user);
                    $em->persist($project);
                    $em->flush();
                    $response->setData(array(
                        'code' => 200,
                        'response' => $this->renderView('FlydDashboardBundle:User:mini.html.twig', array(
                          'user' => $user,
                          'entity' => $project
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
            }
            else {
                $response->setData(array(
                    'code' => 500,
                    'response' => 'User missing'
                ));
            }

        } else {
            $response->setData(array(
                'code' => 500,
                'response' => 'Not an ajax request'
            ));            
        }
        return $response;
    }


    public function ajaxRemoveUserAction($id)
    {
        $request = $this->container->get('request');
        $params = $this->getRequest()->request->all();
        $response = new JsonResponse();
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('FlydDashboardBundle:Project')->find($id);

        if($request->isXmlHttpRequest())
        {
            if($params)
            {
                try {
                    $user = $em->getRepository('FlydDashboardBundle:User')->find($params['element_id']);
                    $user->removeProject($project);
                    $em->persist($user);
                    $em->flush();
                    $response->setData(array(
                        'code' => 200,
                        'response' => 'Utilisateur bien retiré.'
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
                    'response' => 'Fournisseur manquant.'
                ));
            }

        } else {
            $response->setData(array(
                'code' => 500,
                'response' => 'Not an ajax request'
            ));            
        }
        return $response;
    }


    /**
     * Add a ptu entity.
     *
     * @Method("POST")
     */
    public function ajaxAddPtuAction(Request $request, $id)
    {
        $response = new JsonResponse();

        
        if(!$request->isXmlHttpRequest()) {
            return $response->setData(array(
                'code' => 500,
                'response' => 'not an ajax request'
            ));
        }

        $em = $this->getDoctrine()->getManager();        
        $project = $em->getRepository('FlydDashboardBundle:Project')->find($id);
        $ptu = new ProjectTaskUser();
        $ptu->setProject($project);
        $request = $this->container->get('request');
        $params = $this->getRequest()->request->all();

        // Si tache existante
        if($params['task_id']) {
            $task = $em->getRepository('FlydDashboardBundle:Task')->find($params['task_id']);
            $ptu->setTask($task);
        }
        else {
            $task = new Task();
            $task->setName($params['flyd_dashboardbundle_projecttaskuser_mini']['task']['name']);
            $task->setStep($params['flyd_dashboardbundle_projecttaskuser_mini']['task']['step']);
            $ptu->setTask($task);
        }

        

        $form = $this->get('form.factory')->create(new ProjectTaskUserMiniType(), $ptu);

        if ($form->handleRequest($request)->isValid()) {
            try {       
                // d'abord la tâche         
                $em->persist($task);
                $em->flush(); // obligatoire pour id qui sert de clé étrangère du ptu
                //Ensuite la ptu
                $em->persist($ptu);
                $project->addProjectTaskUser($ptu);
                $em->persist($project);
                $em->flush();

                // Prepare form for view
                $ptuform = $this->get('form.factory')->create(new ProjectTaskUserType(), $ptu);

                $response->setData(array(
                    'code' => 200,
                    'response' => $this->renderView('FlydDashboardBundle:ProjectTaskUser:mini.html.twig', array(
                          'form' => $ptuform->createView()
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
        die();
    }

    /**
     * Reorder tasks.
     *
     * @Method("POST")
     */
    public function ajaxReorderPtusAction(Request $request, $id)
    {
        $response = new JsonResponse();
        $em = $this->getDoctrine()->getManager();        
        $project = $em->getRepository('FlydDashboardBundle:Project')->find($id);

        $request = $this->container->get('request');
        $params = $this->getRequest()->request->all();

            return $response->setData(array(
                    'code' => 400,
                    'response' => $params
                ));

        if(!$request->isXmlHttpRequest() || !$params['ptu']) {
            return $response->setData(array(
                'code' => 500,
                'response' => 'not an ajax request'
            ));
        }
        try {      
            $i = 1;
            foreach ($params['ptu'] as $ptuid) {
                $ptu = $em->getRepository('FlydDashboardBundle:ProjectCanvasTask')->find($ptuid);
                $ptu->setPosition($i);
                $em->persist($ptu);
                $i++;
            }    
            $em->flush();

            $response->setData(array(
                'code' => 200,
                'response' => $params['ptu']
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
        die();
    }

    /**
     * Delete a ptu entity.
     *
     * @Method("POST")
     */
    public function ajaxDeletePtuAction(Request $request, $id)
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
            $pct = $em->getRepository('FlydDashboardBundle:ProjectTaskUser')->find($params['ptu_id']);
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
        die();
    }

}
