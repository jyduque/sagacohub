<?php

/**
 * Descripción de la clHorariCitaType
 * @author Jorge Duque
 */
namespace sagaco\CitaBundle\Form\Frontend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clHorariCitaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('coOrientador')
            ->add('feHorario', 'date', array(
                'widget' => 'choice',
                'format' => 'dd-MM-yyyy',
                'years' => range(2015, (date("Y") + 85)),
                'empty_value' => array('year' => 'Año', 'month' => 'Mes', 'day' => 'Día'),))
            ->add('hoInicio')
            ->add('hoFin');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clHorariCita'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_citabundle_clHorariCitatype';
    }
}
