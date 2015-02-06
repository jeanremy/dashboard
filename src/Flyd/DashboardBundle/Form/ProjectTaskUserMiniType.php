<?php

namespace Flyd\DashboardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectTaskUserMiniType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
        ->remove('estimatedtime')
        ->remove('realtime')
        ->remove('status')
        ->remove('user')
        ->remove('isimportant')
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
