<?php

/**
 * Descripción de la clBenefiEstudianteType
 * La clase crea el formulario para los requerimientos:
 * - RF-45 Registrar Beneficiario del Estudiante
 * - RF-46 Activar Beneficiario del Estudiante
 * - RF-47 Desactivar Beneficiario del Estudiante
 * - RF-48 Modificar Datos de Beneficiario del Estudiante 
 * - RF-49 Consultar Beneficiario del Estudiante 
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clBenefiEstudianteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('coControEstudio')
            ->add('nuCedula')
            ->add('inNacionalidad')
            ->add('txPrimerNombre')
            ->add('txSegungNombre')
            ->add('txPrimerApellido')
            ->add('txSegundApellido')
            ->add('coCiudad')
            ->add('coEstadoCivil')
            ->add('coGenero')
            ->add('coParentesco')
            ->add('txDireccion1')
            ->add('txDireccion2')
            ->add('txTelefoCasa')
            ->add('txTelefoCelular')
            ->add('txCorreoElectronico');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clBenefiEstudiante'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clBenefiEstudiantetype';
    }
}
