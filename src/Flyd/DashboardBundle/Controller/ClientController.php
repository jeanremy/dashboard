<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Flyd\DashboardBundle\Entity\Client;
use Flyd\DashboardBundle\Entity\Contact;
use Flyd\DashboardBundle\Form\ClientType;

/**
 * Client controller.
 *
 * @Route("/")
 */
class ClientController extends Controller
{

    /**
     * Lists all Client entities.
     *
     * @Route("/", name="")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();


        $entities = $em->getRepository('FlydDashboardBundle:Client')->findAll();

        return $this->render('FlydDashboardBundle:Client:index.html.twig', array(
            'entities' => $entities
        ));
    }



    /**
     * Displays a form to create a new Client entity.
     *
     * @Route("/add", name="client_add")
     * @Method("GET")
     * @Template("FlydDashboardBundle:Client:add.html.twig")
     */
    public function addAction(Request $request)
    {
        $client = new Client();

        $form = $this->get('form.factory')->create(new ClientType(), $client);

        if ($form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($client);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Client bien enregistré.');

          return $this->redirect($this->generateUrl('oc_platform_view', array('id' => $client->getId())));
        }

        return $this->render('FlydDashboardBundle:Client:add.html.twig', array(
          'form' => $form->createView(),
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

        $entity = $em->getRepository('FlydDashboardBundle:Client')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Client entity.');
        }

        return $this->render('FlydDashboardBundle:Client:show.html.twig', array(
            'entity' => $entity
        ));
    }

    /**
     * Displays a form to edit an existing Client entity.
     *
     * @Route("/{id}/edit", name="_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $client = $em->getRepository('FlydDashboardBundle:Client')->find($id);
        $client->setUpdatedAt(new \DateTime());


        $form = $this->get('form.factory')->create(new ClientType(), $client);

        if ($form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($client);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Client bien enregistré.');

          return $this->redirect($this->generateUrl('client_show', array('id' => $client->getId())));
        }

        return $this->render('FlydDashboardBundle:Client:edit.html.twig', array(
          'entity' => $client,
          'form' => $form->createView()
        ));
    }

  
    
    /**
     * Deletes a Client entity.
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
            $entity = $em->getRepository('FlydDashboardBundle:Client')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Client entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl(''));
    }


}
