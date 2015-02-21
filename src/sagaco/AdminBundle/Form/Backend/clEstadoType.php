<?php

/**
 * Descripción de la clEstadoType
 * La clase crea el formulario para los requerimientos:
 * - RF-83 Registrar Estado
 * - RF-84 Consultar Estado
 * - RF-85 Modificar Estado
 * - RF-86 Actualizar Estado
 * - RF-87 Eliminar Estado 
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clEstadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('coPais')
            ->add('txIniciaEstado')
            ->add('nbEstado');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clEstado'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clEstadotype';
    }
}
