<?php

/**
 * Descripción de la clSemestreType
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clSemestreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('inActivo', 'choice', array(
                'choices' => array(                    
                    '1' => 'Activar'
                    , '0' => 'Desactivar'),                
                'empty_value' => 'Seleccione',
                'empty_data'  => null,                
                'required'  => true,)) 
            ->add('nuSemestAnio', 'choice', array(
                'choices' => array(                    
                    '2014' => '2014'
                    , '2015' => '2015'
                    , '2016' => '2016'
                    , '2017' => '2017'
                    , '2018' => '2018'
                    , '2019' => '2019'
                    , '2020' => '2020'),
                'empty_value' => 'Seleccione',
                'empty_data'  => null,
                'required'  => true,))
            ->add('nuSemestLapso', 'choice', array(
                'choices' => array(                    
                    '1' => '1'
                    , '2' => '2'
                    , '3' => '3'
                    , '4' => '4'
                    , '5' => '5'),
                'empty_value' => 'Seleccione',
                'empty_data'  => null,
                'required'  => true,))
            ->add('feInicio', 'date', array(
                'widget' => 'choice',
                'format' => 'dd-MM-yyyy',
                'years' => range(2014, (date("Y") + 10)),
                'empty_value' => array('year' => 'Año', 'month' => 'Mes', 'day' => 'Día'),)) 
            ->add('feFin', 'date', array(
                'widget' => 'choice',
                'format' => 'dd-MM-yyyy',
                'years' => range(2014, (date("Y") + 10)),
                'empty_value' => array('year' => 'Año', 'month' => 'Mes', 'day' => 'Día'),));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clSemestre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clSemestretype';
    }
}
