<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Flyd\DashboardBundle\Entity\Project;
use Flyd\DashboardBundle\Entity\ProjectTaskUser;
use Flyd\DashboardBundle\Entity\Task;
use Flyd\DashboardBundle\Form\Type\ProjectTaskUserType;
use Flyd\DashboardBundle\Form\Type\ProjectTaskUserMiniType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Project controller.
 *
 */
class ProjectAjaxController extends Controller
{

    /**
     * Add suppliers
     *
     * @Route("/project/{id}/ajaxaddsupplier", name="project_ajax_add_supplier")
     * @Method("POST")
     */
    public function addSupplierAction($id)
    {
        // A FAIRE > protection CSFR...
        $params = $this->getRequest()->request->all();
        $response = new JsonResponse();
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('FlydDashboardBundle:Project')->find($id);

        if($params)
        {
            try {
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

        return $response;
    }

    /**
     * Delete suppliers
     *
     * @Route("/project/{id}/ajaxremovesupplier", name="project_ajax_remove_supplier")
     * @Method("POST")
     */
    public function removeSupplierAction($id)
    {
        $params = $this->getRequest()->request->all();
        $response = new JsonResponse();
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('FlydDashboardBundle:Project')->find($id);

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

        return $response;
    }

    /**
     * Add users
     *
     * @Route("/project/{id}/ajaxadduser", name="project_ajax_add_user")
     * @Method("POST")
     */
    public function addUserAction($id)
    {
        $params = $this->getRequest()->request->all();
        $response = new JsonResponse();
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('FlydDashboardBundle:Project')->find($id);

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

        return $response;
    }

    /**
     * Remove users
     *
     * @Route("/project/{id}/ajaxremoveuser", name="project_ajax_remove_user")
     * @Method("POST")
     */

    public function removeUserAction($id)
    {
        $params = $this->getRequest()->request->all();
        $response = new JsonResponse();
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('FlydDashboardBundle:Project')->find($id);

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

        return $response;
    }


    /**
     * Add project Task User
     *
     * @Route("/project/{id}/ajaxaddptu", name="project_ajax_add_ptu")
     * @Method("POST")
     */
    public function addPtuAction(Request $request, $id)
    {
        $response = new JsonResponse();
        $em = $this->getDoctrine()->getManager();        
        $project = $em->getRepository('FlydDashboardBundle:Project')->find($id);
        $status = $em->getRepository('FlydDashboardBundle:Status')->findOneByName('A venir');
        $ptu = new ProjectTaskUser();
        $ptu->setProject($project);
        $ptu->setStatus($status);
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
                          'form' => $ptuform->createView(),
                          'ptu' => $ptu
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
     * Reorder PTUS
     *
     * @Route("/project/{id}/ajaxreorderptus", name="project_ajax_reorder_ptus")
     * @Method("POST")
     */
    public function reorderPtusAction(Request $request, $id)
    {
        $response = new JsonResponse();
        $em = $this->getDoctrine()->getManager();        

        $params = $this->getRequest()->request->all();

        $i = 0;
        foreach ($params['ptu'] as $ptu) {
            $ptuid = $ptu;

            $ptu = $em->getRepository('FlydDashboardBundle:ProjectTaskUser')->find($ptuid);
            try { 
                $ptu->setPosition($i);
                $em->persist($ptu);
                $em->flush($ptu);
                $response->setData(array(
                    'code' => 200,
                    'response' => 'ok'
                ));
            } 
            catch(\Doctrine\ORM\ORMException $e) {
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
            
        $i++;
        }
       
        return $response;
    }

    /**
     * Delete project Task User
     *
     * @Route("/project/{id}/ajaxremoveptu", name="project_ajax_remove_ptu")
     * @Method("POST")
     */
    public function removePtuAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $response = new JsonResponse();
        $params = $this->getRequest()->request->all();

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
    }

    /**
     * Update Status of a project
     *
     * @Route("/project/{id}/updatestatus", name="project_ajax_update_status")
     * @Method("POST")
     */
    public function updateStatusAction($id) {
        $response = new JsonResponse();        
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('FlydDashboardBundle:Project')->find($id);
        $ptus = $project->getProjectTaskUsers();
        $statuses = array();
        foreach ($ptus as $ptu) {
            $status = $ptu->getStatus();
            $statuses[] = $status? $status->getName(): null;
        }
        if(in_array('En cours', $statuses) || in_array('En cours de validation', $statuses)) {
            $status = in_array('En cours', $statuses) ? "En cours":"En cours de validation";
        } else {
            $status = in_array('A venir', $statuses) ? "A venir":"Terminé";
        }
        try {            
            $newStatus = $em->getRepository('FlydDashboardBundle:Status')->findOneByName($status);
            $project->setStatus($newStatus);
            $em->persist($project);
            $em->flush();

            $response->setData(array(
                'code' => 200,
                'response' => array(
                    'id' => $newStatus->getId(),
                    'name' => $newStatus->getName()
                    )
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
