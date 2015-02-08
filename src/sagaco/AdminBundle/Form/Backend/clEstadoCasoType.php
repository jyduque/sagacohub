<?php

/**
 * Descripción de la clEstadoCasoType
 * La clase crea el formulario para los requerimientos:
 * - RF-98 Registrar EstadoCaso
 * - RF-99 Activar EstadoCaso
 * - RF-100 Consultar EstadoCaso
 * - RF-101 Modificar EstadoCaso
 * - RF-102 Desactivar EstadoCaso
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clEstadoCasoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('nbEstadoCaso');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clEstadoCaso'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clEstadoCasotype';
    }
}
