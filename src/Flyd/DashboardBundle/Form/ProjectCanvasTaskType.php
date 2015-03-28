<?php

namespace Flyd\DashboardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ProjectCanvasTaskType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('position', 'hidden')
            ->add('task', new TaskType(), array(
                'required' => false
            ))

            ->add('save','submit', array(
                'attr' => array('class' => 'btn--save--reverse'),
                'label' => 'Ajouter',
            ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Flyd\DashboardBundle\Entity\ProjectCanvasTask'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'flyd_dashboardbundle_projectcanvastask';
    }
}
