<?php

namespace Flyd\DashboardBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('company')
            ->add('lastname')
            ->add('job')
            ->add('email', 'text', array('required' => false))
            ->add('phone', 'text', array('required' => false))
            ->add('mobile', 'text', array('required' => false))
            ->add('company', 'entity', array(
                'class' => 'FlydDashboardBundle:Company'
            ))
            ->add('save','submit', array(
                'attr' => array('class' => 'btn--save--reverse'),
                'label' => 'Enregistrer',
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Flyd\DashboardBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'flyd_dashboardbundle_contact';
    }
}
