<?php

/**
 * Descripción de la clEstadoCitaType
 * La clase crea el formulario para los requerimientos:
 * - RF-108 Registrar EstadoCita
 * - RF-109 Activar EstadoCita
 * - RF-110 Consultar EstadoCita
 * - RF-111 Modificar EstadoCita
 * - RF-112 Desactivar EstadoCita
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clEstadoCitaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('nbEstadoCita')
            ->add('inActivo');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clEstadoCita'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clEstadoCitatype';
    }
}
