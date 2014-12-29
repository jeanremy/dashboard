<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Flyd\DashboardBundle\Entity\Supplier;
use Flyd\DashboardBundle\Entity\Contact;
use Flyd\DashboardBundle\Form\SupplierType;

/**
 * Supplier controller.
 *
 * @Route("/")
 */
class SupplierController extends Controller
{

    /**
     * Lists all Supplier entities.
     *
     * @Route("/", name="supplier_list")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();


        $entities = $em->getRepository('FlydDashboardBundle:Supplier')->findAll();

        return $this->render('FlydDashboardBundle:Supplier:index.html.twig', array(
            'entities' => $entities
        ));
    }



    /**
     * Displays a form to create a new Supplier entity.
     *
     * @Route("/supplier/add", name="supplier_add")
     * @Method("GET")
     * @Template("FlydDashboardBundle:Supplier:add.html.twig")
     */
    public function addAction(Request $request)
    {
        $supplier = new Supplier();

        $form = $this->get('form.factory')->create(new SupplierType(), $supplier);

        if ($form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($supplier);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Fournisseur bien enregistré.');

          return $this->redirect($this->generateUrl('supplier_show', array('id' => $supplier->getId())));
        }

        return $this->render('FlydDashboardBundle:Supplier:add.html.twig', array(
          'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Supplier entity.
     *
     * @Route("/supplier/{id}", name="supplier_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FlydDashboardBundle:Supplier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Supplier entity.');
        }

        return $this->render('FlydDashboardBundle:Supplier:show.html.twig', array(
            'entity' => $entity
        ));
    }

    /**
     * Displays a form to edit an existing Supplier entity.
     *
     * @Route("/supplier/{id}/edit", name="supplier_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $supplier = $em->getRepository('FlydDashboardBundle:Supplier')->find($id);
        $supplier->setUpdatedAt(new \DateTime());


        $form = $this->get('form.factory')->create(new SupplierType(), $supplier);

        if ($form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($supplier);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Supplier bien enregistré.');

          return $this->redirect($this->generateUrl('supplier_show', array('id' => $supplier->getId())));
        }

        return $this->render('FlydDashboardBundle:Supplier:edit.html.twig', array(
          'entity' => $supplier,
          'form' => $form->createView()
        ));
    }

  
    
    /**
     * Deletes a Supplier entity.
     *
     * @Route("supplier/{id}/delete", name="supplier_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FlydDashboardBundle:Supplier')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Supplier entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl(''));
    }


}
