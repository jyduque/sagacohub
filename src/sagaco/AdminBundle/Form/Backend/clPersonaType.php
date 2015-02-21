<?php

/**
 * Descripción de la clPersonaType
 * La clase crea el formulario para los requerimientos:
 * - RF-26 Registrar Persona
 * - RF-28 Activar Persona
 * - RF-29 Modificar Datos de Persona
 * - RF-30 Desactivar Persona
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clPersonaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('inEstudiante')
            ->add('coControEstudio')
            ->add('coRecursHumano');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clPersona'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clPersonatype';
    }
}
