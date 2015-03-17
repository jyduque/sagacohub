<?php

/**
 * Descripción de la clEntrevistaType
 * La clase crea el formulario para los requerimientos:
 * - RF-10 Registrar Entrevista
 * - RF-11 Modificar Datos de la Entrevista
 * - RF-12 Listar Entrevistas Realizadas al Asesorado
 * - RF-13 Consultar Detalle de una Entrevista Específica
 * - RF-14 Asignar Pruebas
 * - RF-51 Registrar Entrevista de Emergencia
 * @author Jorge Duque
 */
namespace sagaco\EntrevistaBundle\Form\Extranet;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clEntrevistaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('coCaso')
            ->add('coCita')
            ->add('coTipoEntrevista')
            ->add('fhEntrevista')
            ->add('hoInicio')
            ->add('hoCulminacion')
            ->add('txMotivoIndividual')
            ->add('txMotivoEntrevista')
            ->add('inSoliciEspontanea')
            ->add('txTratamiento')
            ->add('txObservacion');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clEntrevista'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_entrevistabundle_clEntrevContactotype';
    }
}
