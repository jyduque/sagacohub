<?php

/**
 * Descripción de la clEstadoPruebaType
 * La clase crea el formulario para los requerimientos:
 * - RF-103 Registrar Estado Prueba
 * - RF-104 Activar Estado Prueba
 * - RF-105 Consultar Estado Prueba
 * - RF-106 Modificar Estado Prueba
 * - RF-107 Desactivar Estado Prueba
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clEstadoPruebaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('nbEstadoPrueba');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clEstadoPrueba'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clEstadoPruebatype';
    }
}
