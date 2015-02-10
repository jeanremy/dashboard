<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Flyd\DashboardBundle\Entity\Supplier;
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
            'entities' => $entities,
            'menu' => 'supplier'
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
            'menu' => 'supplier'
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
            'entity' => $entity,
            'menu' => 'supplier'
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
            'form' => $form->createView(),
            'menu' => 'supplier'
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
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FlydDashboardBundle:Supplier')->find($id);


        if (null === $entity) {
        throw new NotFoundHttpException("Le fournisseur d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($entity);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "Le fournisseur a bien été supprimé.");

            return $this->redirect($this->generateUrl('client_list'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('FlydDashboardBundle:Supplier:delete.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'menu' => 'supplier'
        ));

    }

    /**
     * Add suppliers to projects.
     *
     * @Route("/supplier/getform", name="supplier_ajax_form")
     * @Method("POST")
     */
    public function getFormAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('FlydDashboardBundle:Project')->find($id);
        $existingsuppliers = $project->getSuppliers();
        $entities = $em->getRepository('FlydDashboardBundle:Supplier')->getSuppliersWithout($existingsuppliers);

        return $this->render('FlydDashboardBundle:Supplier:select.html.twig', array(
            'entities' => $entities,
            'entity' => $project
        ));
    }   

}
