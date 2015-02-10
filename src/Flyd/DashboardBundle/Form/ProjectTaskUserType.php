<?php

namespace Flyd\DashboardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectTaskUserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('position', 'hidden')
                        
            ->add('estimatedtime', 'time', array(
                'widget' => 'single_text'
            ))
            ->add('realtime', 'time', array(
                'widget' => 'single_text'
            ))
            ->add('status', 'entity', array(
                'class' => 'FlydDashboardBundle:Status',
                'property' => 'name'
            ))
            ->add('user', 'entity', array(
                'class' => 'FlydDashboardBundle:User',
                'property' => 'username',
                'empty_value' => 'Choisissez une option'
            ))
            ->add('isimportant', 'checkbox', array(
                'required'  => false
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Flyd\DashboardBundle\Entity\ProjectTaskUser'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'flyd_dashboardbundle_projecttaskuser';
    }
}
