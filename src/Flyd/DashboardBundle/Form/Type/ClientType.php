<?php

namespace Flyd\DashboardBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ClientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('job')
            ->add('entrance', 'date', array(
                'widget' => 'single_text'
            ))
            ->add('origin', 'entity', array(
                'class' => 'FlydDashboardBundle:Origin',
                'property' => 'name',
            ))
            ->add('type', 'choice', array(
                'choices'   => array(
                    '0'   => 'Actuel',
                    '1' => 'Prospect'
                )
            ))
            ->add('reminder', 'date', array(
                'widget' => 'single_text'
            ))
            ->add('save','submit', array(
                'attr' => array('class' => 'btn--save--reverse'),
                'label' => 'Enregistrer',
            ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Flyd\DashboardBundle\Entity\Client'
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
