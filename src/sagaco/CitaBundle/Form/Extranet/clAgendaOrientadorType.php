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

class clAgendaOrientadorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('coOrientador')
            ->add('coSemestre')
            ->add('coDuracion');
        $objConstructor->add('detallAgenda', 'bootstrap_collection', array(
            'type' => new clDetallAgendaorientadorType(),
            'by_reference' => false,
            'allow_add' => true,
            'sub_widget_col' => 9,
            'button_col' => 3,
            'prototype_name' => 'inlinep',
            'options' => array(            
            'attr' => array('style' => 'inline'))));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clAgendaOrientador'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_citabundle_clAgendaOrientadortype';
    }
}
