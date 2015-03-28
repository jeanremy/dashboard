<?php

namespace Flyd\DashboardBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProjectTaskUserMiniType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
        ->remove('estimatedtime')
        ->remove('realtime')
        ->remove('status')
        ->remove('user')
        ->remove('important')
        ->add('task', new TaskType(), array(
                'required' => true
            ))
        ->add('save','submit', array(
        'attr' => array('class' => 'btn--save--reverse'),
        'label' => 'Ajouter',
    ));
  }

  public function getName()
  {
    return 'flyd_dashboardbundle_projecttaskuser_mini';
  }

  public function getParent()
  {
    return new ProjectTaskUserType();
  }
}
