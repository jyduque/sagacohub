<?php

/**
 * Descripción de la clConfigEntrevistaType
 * La clase crea el formulario para los requerimientos:
 * - RF-10 Registrar Entrevista
 * - RF-11 Modificar Datos de la Entrevista
 * - RF-12 Listar Entrevistas Realizadas al Asesorado
 * - RF-13 Consultar Detalle de una Entrevista Específica
 * - RF-51 Registrar Entrevista de Emergencia
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clConfigEntrevistaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('coTipoEntrevista')
            ->add('txPregunta')
            ->add('coTipoPregunta')
            ->add('inActiva');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clConfigEntrevista'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clConfigEntrevistatype';
    }
}
