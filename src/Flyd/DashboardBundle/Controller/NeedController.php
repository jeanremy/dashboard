<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Flyd\DashboardBundle\Entity\Need;
use Flyd\DashboardBundle\Entity\Client;
use Flyd\DashboardBundle\Form\NeedType;

class NeedController extends Controller
{
	public function addAction(Request $request, $id)
    {
        $need = new Need();
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('FlydDashboardBundle:Client')->find($id);

        $need->setStartDate(new \DateTime() );
        $need->setDeadline(new \DateTime('+1 month') );
        $need->setEndDate(new \DateTime('+1 month') );
        $need->setClient($client);


        $form = $this->get('form.factory')->create(new NeedType(), $need);

        if ($form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($need);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Besoin bien enregistré.');

          return $this->redirect($this->generateUrl('need_show', array('id' => $need->getId())));
        }

        return $this->render('FlydDashboardBundle:Need:add.html.twig', array(
          'form' => $form->createView(),
          'entity' => $need
        ));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FlydDashboardBundle:Need')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Need entity.');
        }

        return $this->render('FlydDashboardBundle:Need:show.html.twig', array(
            'entity' => $entity
        ));
    }

     public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $need = $em->getRepository('FlydDashboardBundle:Need')->find($id);


        $form = $this->get('form.factory')->create(new NeedType(), $need);

        if ($form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($need);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Besoin bien enregistré.');

          return $this->redirect($this->generateUrl('need_show', array('id' => $need->getId())));
        }

        return $this->render('FlydDashboardBundle:Need:add.html.twig', array(
          'entity' => $need,
          'form' => $form->createView()
        ));
    }

  
    public function deleteAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FlydDashboardBundle:Need')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Need entity.');
        }
        $client = $entity->getClient();

        $em->remove($entity);
        $em->flush();
        $request->getSession()->getFlashBag()->add('notice', 'Le besoin a bien été supprimé.');


        return $this->render('FlydDashboardBundle:Client:show.html.twig', array(
          'entity' => $client
        ));
    }
}
