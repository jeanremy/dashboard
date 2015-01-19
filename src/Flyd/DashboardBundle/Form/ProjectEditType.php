<?php

namespace Flyd\DashboardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectEditType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->remove('project_canvas');
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
