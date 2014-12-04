<?php

namespace Flyd\DashboardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class SupplierType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('entrance', 'date', array(
                'widget' => 'single_text'
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
            ->add('addresses', 'collection', array(
                'type'         => new AddressType(),
                'allow_add'    => true,
                'allow_delete' => true
            ))
            ->add('contacts', 'collection', array(
                'type'         => new ContactType(),
                'allow_add'    => true,
                'allow_delete' => true
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
            'data_class' => 'Flyd\DashboardBundle\Entity\Supplier'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'flyd_dashboardbundle_supplier';
    }
}