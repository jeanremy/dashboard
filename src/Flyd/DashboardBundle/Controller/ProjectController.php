<?php

namespace Flyd\DashboardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Flyd\DashboardBundle\Entity\Project;
use Flyd\DashboardBundle\Entity\ProjectTaskUser;
use Flyd\DashboardBundle\Form\Type\ProjectType;
use Flyd\DashboardBundle\Form\Type\ProjectEditType;
use Flyd\DashboardBundle\Form\Type\ProjectTaskUserType;
use Flyd\DashboardBundle\Form\Type\ProjectTaskUserMiniType;

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
     * @Route("/", name="flyd_dashboard_homepage")
     * @Template("FlydDashboardBundle:Project:index.html.twig")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        // Set default value to current user if form not submitted

        $user_field_options = array(
            'class'             => 'FlydDashboardBundle:User',
            'empty_value'   => 'Choisissez un utilisateur',
            'required' => false

        );
        if ($request->getMethod() != "POST") {
            $user_field_options['data'] = $user;
        }
        
        $form = $this->createFormBuilder()
            // ->add('users', 'entity', $user_field_options)
            ->add('users', 'entity', $user_field_options)
            ->add('categories', 'entity', array(
                'class'         => 'FlydDashboardBundle:Category',
                'empty_value'   => 'Choisissez une categorie',
                'required'      => false)
            )
            ->add('status', 'entity', array(
                'class'         => 'FlydDashboardBundle:Status',
                'empty_value'   => 'Choisissez un statut',
                'required'      => false)
            )
            ->add('save','submit', array(
                'attr'          => array('class' => 'btn--save--reverse'),
                'label'         => 'Filtrer',
            ))
            ->getForm();

        if ($request->getMethod() == "POST") {
            $form->submit($request);
            if ($form->isValid()) {
                $params = $this->getRequest()->request->all();
                $entities = $em->getRepository('FlydDashboardBundle:Project')->findPreciselyBy($params['form']['categories'], $params['form']['status'], $params['form']['users']);
            }
        }
        else {
            $user_id = $this->getUser()->getId();
            $entities = $em->getRepository('FlydDashboardBundle:Project')->findPreciselyBy(null,null, $user_id);
        }

        return array(
            'entities' => $entities,
            'form' => $form->createView(),
            'menu' => 'dashboard'
        );
    }

    /**
     * Creates a new Project entity.
     *
     * @Route("need/{id}/project/add", name="project_add")
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
            if($projectcanvas) {
              $pcts = $projectcanvas->getProjectCanvasTasks();
              $status = $em->getRepository('FlydDashboardBundle:Status')->findOneByName('A venir');
              //exit(\Doctrine\Common\Util\Debug::dump($status));
              foreach ($pcts as $pct) {
                  $ptu = new ProjectTaskUser();
                  $ptu->setStatus($status);
                  $ptu->setProject($project);
                  $ptu->setPosition($pct->getPosition());
                  $ptu->setTask($pct->getTask());
                  $em->persist($ptu);
                  $project->addProjectTaskUser($ptu);
              }
              $em = $this->getDoctrine()->getManager();
              $em->persist($project);
              $em->flush();
            }

            $request->getSession()->getFlashBag()->add('notice', 'Projet bien enregistré.');

            return $this->redirect($this->generateUrl('project_show', array('id' => $project->getId())));
        }

        return array(
            'form' => $form->createView(),
            'entity' => $project,
            'menu' => 'project'
        );
    }

    


    /**
     * Finds and displays a Project entity.
     *
     * @Route("/project/{id}", name="project_show")
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

        return array(
            'entity' => $entity,
            'forms' => $forms,
            'ptuform' => $ptuform->createView(),
            'minitasks' => $minitasks,
            'menu' => 'project'
        );
    }

    /**
     * Displays a form to edit an existing Project entity.
     *
     * @Route("/project/{id}/edit", name="project_edit")
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
          // Update les status de tout le monde si terminé
          $ptus = $project->getProjectTaskUsers();
          $project_status = $project->getStatus();

          if($project_status->getName() === "Terminé") {
              foreach ($ptus as $ptu) {
                  $ptu->setStatus($project_status);
                  $em->persist($ptu);
              }
          }

          $em->flush();
          $request->getSession()->getFlashBag()->add('notice', 'Projet bien enregistré.');

          return $this->redirect($this->generateUrl('project_show', array('id' => $project->getId())));
        }

        return array(
            'entity' => $project,
            'form' => $form->createView(),
            'menu' => 'project'
        );
    }

    /**
     * Delete a Project entity.
     *
     * @Route("/project/{id}/delete", name="project_delete")
     * @Template()
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FlydDashboardBundle:Project')->find($id);


        if (null === $entity) {
            throw new NotFoundHttpException("Le projet d'id ".$id." n'existe pas.");
        }

        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($entity);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', "Le projet a bien été supprimé.");

            return $this->redirect($this->generateUrl('client_list'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'menu' => 'project'
        );

    }

}
