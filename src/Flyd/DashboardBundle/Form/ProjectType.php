<?php

namespace Flyd\DashboardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('category', 'entity', array(
                'class' => 'FlydDashboardBundle:Category',
                'property' => 'name',
                'empty_value' => 'Choisissez une categorie'
            ))
            ->add('startDate', 'date', array(
                'widget' => 'single_text'
            ))
            ->add('deadline', 'date', array(
                'widget' => 'single_text'
            ))
            ->add('endDate', 'date', array(
                'widget' => 'single_text'
            ))
            ->add('project_canvas', 'entity', array(
                'class' => 'FlydDashboardBundle:ProjectCanvas',
                'property' => 'name',
                'empty_value' => 'Choisissez une option'
            ))
            ->add('save','submit', array(
                'attr' => array('class' => 'btn--save--reverse'),
                'label' => 'Enregistrer',
            ));
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Flyd\DashboardBundle\Entity\Project'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'flyd_dashboardbundle_project';
    }
}
