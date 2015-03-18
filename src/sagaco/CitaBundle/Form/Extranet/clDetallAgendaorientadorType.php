<?php

/**
 * Descripción de la clAgendaOrientadorType
 * La clase crea el formulario para los requerimientos:
 * - RF-6 Configurar Agenda Personalizada
 * - RF-7 Modificar Agenda Personalizada
 * - RF-8 Consultar Agenda Personalizada
* @author Jorge Duque
 */
namespace sagaco\CitaBundle\Form\Extranet;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clDetallAgendaorientadorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('hoInicio', 'time', array(
                'widget' => 'choice',
                'model_timezone' => 'America/Caracas',
                'empty_value' => array('hour' => 'Hora', 'minute' => 'Minutos'),
                'required' => true))
            ->add('inLunes', 'checkbox', array(
                'label' => 'Lunes',
                'required' => false))
            ->add('inMartes', 'checkbox', array(
                'label' => 'Martes',
                'required' => false))
            ->add('inMiercoles', 'checkbox', array(
                'label' => 'Miércoles',
                'required' => false))
            ->add('inJueves', 'checkbox', array(
                'label' => 'Jueves',
                'required' => false))
            ->add('inViernes', 'checkbox', array(
                'label' => 'Viernes',
                'required' => false));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clDetallAgendaorientador'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_citabundle_clDetallAgendaorientadortype';
    }
}
