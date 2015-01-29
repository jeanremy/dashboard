<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Flyd\DashboardBundle\Entity\User;
use Flyd\DashboardBundle\Entity\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Flyd\DashboardBundle\Form\UserType;

/**
 * User controller.
 *
 * @Route("/")
 */
class UserController extends Controller
{

    /**
     * Lists all User entities.
     *
     * @Route("/", name="")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();


        $entities = $em->getRepository('FlydDashboardBundle:User')->findAll();

        return $this->render('FlydDashboardBundle:User:index.html.twig', array(
            'entities' => $entities,
            'menu' => 'user'
        ));
    }



    /**
     * Displays a form to create a new User entity.
     *
     * @Route("/user/add", name="user_add")
     * @Method("GET")
     * @Template("FlydDashboardBundle:User:add.html.twig")
     */
    public function addAction(Request $request)
    {
        $user = new User();
        $em = $this->getDoctrine()->getManager();


        $form = $this->get('form.factory')->create(new UserType(), $user);

        if ($form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($user);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Utilisateur bien enregistré.');

          return $this->redirect($this->generateUrl('user_show', array('id' => $user->getId())));
        }

        return $this->render('FlydDashboardBundle:User:add.html.twig', array(
            'form' => $form->createView(),
            'menu' => 'user'
        ));
    }

    /**
     * Finds and displays a Client entity.
     *
     * @Route("/{id}", name="_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FlydDashboardBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        return $this->render('FlydDashboardBundle:User:show.html.twig', array(
            'entity' => $entity,
            'menu' => 'user'
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     * @Route("/{id}/edit", name="_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $currentUser = $this->getUser();
        $user = $em->getRepository('FlydDashboardBundle:User')->find($id);

        if($currentUser->getId() == $id) {

            $form = $this->get('form.factory')->create(new UserType(), $user);

            if ($form->handleRequest($request)->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $user->setplainPassword($user->getPassword());
                $em->persist($user);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Utilisateur bien enregistré.');

                return $this->redirect($this->generateUrl('user_show', array('id' => $user->getId())));
            }

            return $this->render('FlydDashboardBundle:User:edit.html.twig', array(
              'entity' => $user,
              'form' => $form->createView()
            ));

        } else {
            $this->get('session')->getFlashBag()->add('notice', 'Bien essayé, mais vous n\'avez pas le droit de changer les informations des autres.');
            $response = $this->redirect($this->generateUrl('user_show', array(
                'id' => $id,
                'menu' => 'user'
            )));
            return $response;

        }
    }

  
    
    /**
     * Deletes a User entity.
     *
     * @Route("/{id}", name="_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FlydDashboardBundle:User')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl(''));
    }

    /**
     * Add users to projects.
     *
     * @Route("/user/getform", name="user_ajax_form")
     * @Method("POST")
     */
    public function getFormAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('FlydDashboardBundle:Project')->find($id);
        $existingusers = $project->getUsers();

        $entities = $this->getDoctrine()->getManager()->getRepository('FlydDashboardBundle:User')->getUsersWithout($existingusers);
        return $this->render('FlydDashboardBundle:User:select.html.twig', array(
            'entities' => $entities,
            'entity' => $project
        ));
    }  


}
