<?php

/**
 * Descripción de la clCiudadType
 * La clase crea el formulario para los requerimientos:
 * - RF-93 Registrar Ciudad
 * - RF-94 Consultar Ciudad
 * - RF-95 Modificar Ciudad
 * - RF-96 Actualizar Ciudad
 * - RF-97 Eliminar Ciudad 
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clCiudadType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('coMunicipio')
            ->add('txIniciaCiudad')
            ->add('nbCiudad');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clCiudad'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clCiudadtype';
    }
}
