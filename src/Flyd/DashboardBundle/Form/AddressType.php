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
            ->add('street')
            ->add('streetComp')
            ->add('zipcode')
            ->add('city')
            ->add('cityComp')
            ->add('type', 'choice', array(
                'choices'   => array(
                    '0'   => 'Globale',
                    '1' => 'Facturation',
                    '2' => 'Expedition'
                )
            ))
            ->add('save','submit', array(
                'attr' => array('class' => 'btn btn--save'),
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
