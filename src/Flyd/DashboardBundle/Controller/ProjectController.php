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
use Flyd\DashboardBundle\Form\ProjectType;
use Flyd\DashboardBundle\Form\ProjectEditType;
use Flyd\DashboardBundle\Form\ProjectTaskUserType;
use Flyd\DashboardBundle\Form\ProjectTaskUserMiniType;

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
     * @Route("/projects", name="project_list")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FlydDashboardBundle:Project')->findAll();
        
        $form = $this->createFormBuilder()
            ->add('users', 'entity', array(
                'class' => 'FlydDashboardBundle:User',
                'expanded'=>false,
                'empty_value' => 'Choisissez un utilisateur',
                'required' => false,
                'multiple'=>false)
            )
            ->add('categories', 'entity', array(
                'class' => 'FlydDashboardBundle:Category',
                'expanded'=>false,
                'empty_value' => 'Choisissez une categorie',
                'required' => false,
                'multiple'=>false)
            )
            ->add('status', 'entity', array(
                'class' => 'FlydDashboardBundle:Status',
                'expanded'=>false,
                'empty_value' => 'Choisissez un statut',
                'required' => false,
                'multiple'=>false)
            )
            ->add('save','submit', array(
                    'attr' => array('class' => 'btn--save--reverse'),
                    'label' => 'Enregistrer',
                ))
            ->getForm();
    if ($request->getMethod() == "POST") {
        $form->submit($request);
        if ($form->isValid()) {
            //Custom method 
            $params = $this->getRequest()->request->all();
            $entities = $em->getRepository('FlydDashboardBundle:Project')->findPreciselyBy($params['form']['categories'], $params['form']['status'], $params['form']['users']);
        }
        else {
            // faire appel à cette méthode, avec user par défaut
            $entities = $em->getRepository('FlydDashboardBundle:Project')->findAll();
        }
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
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Project bien enregistré.');

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

            $request->getSession()->getFlashBag()->add('info', "Le projet a bien été supprimé.");

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
