<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Flyd\DashboardBundle\Entity\ProjectCanvas;
use Flyd\DashboardBundle\Entity\Task;
use Flyd\DashboardBundle\Form\ProjectCanvasType;
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
     * @Route("/", name="projectcanvas_list")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FlydDashboardBundle:ProjectCanvas')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new ProjectCanvas entity.
     *
     * @Route("/", name="project_add")
     * @Method("POST")
     * @Template("FlydDashboardBundle:ProjectCanvas:add.html.twig")
     */
    public function addAction(Request $request)
    {
        $projectcanvas = new ProjectCanvas();
        $em = $this->getDoctrine()->getManager();

        $form = $this->get('form.factory')->create(new ProjectCanvasType(), $projectcanvas);

        if ($form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($projectcanvas);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Canevas de projet bien enregistré.');

          return $this->redirect($this->generateUrl('projectcanvas_show', array('id' => $projectcanvas->getId())));
        }

        return $this->render('FlydDashboardBundle:ProjectCanvas:add.html.twig', array(
          'form' => $form->createView(),
          'entity' => $projectcanvas
        ));
    }

    


    /**
     * Finds and displays a ProjectCanvas entity.
     *
     * @Route("/{id}", name="project_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FlydDashboardBundle:ProjectCanvas')->find($id);

        //Get all users of a project

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProjectCanvas entity.');
        }

        return $this->render('FlydDashboardBundle:ProjectCanvas:show.html.twig', array(
          'entity' => $entity
        ));
    }

    /**
     * Displays a form to edit an existing ProjectCanvas entity.
     *
     * @Route("/{id}/edit", name="project_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $projectcanvas = $em->getRepository('FlydDashboardBundle:ProjectCanvas')->find($id);


        $form = $this->get('form.factory')->create(new ProjectCanvasType(), $projectcanvas);

        if ($form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($projectcanvas);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Canevas de projet bien enregistré.');

          return $this->redirect($this->generateUrl('projectcanvas_show', array('id' => $projectcanvas->getId())));
        }

        return $this->render('FlydDashboardBundle:ProjectCanvas:edit.html.twig', array(
          'entity' => $projectcanvas,
          'form' => $form->createView()
        ));
    }

   
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

            $request->getSession()->getFlashBag()->add('info', "Le canevas de projet a bien été supprimé.");

            return $this->redirect($this->generateUrl('projectcanvas_list'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('FlydDashboardBundle:ProjectCanvas:delete.html.twig', array(
              'entity' => $entity,
              'form'   => $form->createView()
            ));

    }

    public function ajaxAddSupplierAction($id)
    {
        $request = $this->container->get('request');
        $params = $this->getRequest()->request->all();
        $response = new JsonResponse();
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('FlydDashboardBundle:ProjectCanvas')->find($id);

        if($request->isXmlHttpRequest())
        {
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
        $project = $em->getRepository('FlydDashboardBundle:ProjectCanvas')->find($id);

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
        $project = $em->getRepository('FlydDashboardBundle:ProjectCanvas')->find($id);
 

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
        $project = $em->getRepository('FlydDashboardBundle:ProjectCanvas')->find($id);

        if($request->isXmlHttpRequest())
        {
            if($params)
            {
                try {
                    $user = $em->getRepository('FlydDashboardBundle:User')->find($params['element_id']);
                    $user->removeProjectCanvas($project);
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
}
