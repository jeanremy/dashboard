<?php

namespace Flyd\DashboardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class NeedType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description', 'textarea')
            ->add('startDate', 'date', array(
                'widget' => 'single_text'
            ))
            ->add('endDate', 'date', array(
                'widget' => 'single_text'
            ))
            ->add('deadline', 'date', array(
                'widget' => 'single_text'
            ))
            ->add('client', 'entity', array(
                'class' => 'FlydDashboardBundle:Client',
                'property' => 'name',
            ))
            ->add('save','submit', array(
                'attr' => array('class' => 'btn btn--save'),
                'label' => 'Enregistrer',
            ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Flyd\DashboardBundle\Entity\Need'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'flyd_dashboardbundle_client';
    }
}
