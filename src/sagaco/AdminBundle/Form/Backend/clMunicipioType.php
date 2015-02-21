<?php

/**
 * Descripción de la clMunicipioType
 * La clase crea el formulario para los requerimientos:
 * - RF-88 Registrar Municipio
 * - RF-89 Consultar Municipio
 * - RF-90 Modificar Municipio
 * - RF-91 Actualizar Municipio
 * - RF-92 Eliminar Municipio 
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clMunicipioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('coEstado')
            ->add('txIniciaMunicipio')
            ->add('nbMunicipio');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clMunicipio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clMunicipiotype';
    }
}
