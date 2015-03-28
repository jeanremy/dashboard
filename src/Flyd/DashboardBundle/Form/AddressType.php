<?php

namespace Flyd\DashboardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddressType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('building')
            ->add('street')
            ->add('streetComp')
            ->add('zipcode')
            ->add('city')
            ->add('cityComp')
            ->add('type', 'entity', array(
                'class' => 'FlydDashboardBundle:Type'
            ))
            ->add('company', 'entity', array(
                'class' => 'FlydDashboardBundle:Company'
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
            'data_class' => 'Flyd\DashboardBundle\Entity\Address'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'flyd_dashboardbundle_address';
    }
}
