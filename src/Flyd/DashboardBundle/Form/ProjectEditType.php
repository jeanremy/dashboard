<?php

namespace Flyd\DashboardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProjectEditType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->remove('project_canvas')
            ->add('status', 'entity', array(
                'class' => 'FlydDashboardBundle:Status',
                'property' => 'name',
                'empty_value' => 'Choisissez une option'
            ));
  }

  public function getName()
  {
    return 'flyd_dashboardbundle_project_edit';
  }

  public function getParent()
  {
    return new ProjectType();
  }
}
