<?php

namespace Flyd\DashboardBundle\Form;

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
            ->add('entrance')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('type', 'choice', array(
                'choices'   => array(
                    '0'   => 'Actuel',
                    '1' => 'Prospect'
                )
            ))
            ->add('reminder')
            ->add('contacts', 'collection', array(
                'type'         => new ContactType(),
                'allow_add'    => true,
                'allow_delete' => true
            ))
            ->add('save','submit')
        ;
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
