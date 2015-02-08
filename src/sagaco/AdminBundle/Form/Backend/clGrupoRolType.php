<?php

/**
 * Descripción de la clGrupoRolType
 * La clase crea el formulario para los requerimientos:
 * - RF-27 Asignar Rol
 * - RF-35 Registrar Rol
 * - RF-36 Activar Rol
 * - RF-37 Consultar Rol
 * - RF-38 Modificar datos del rol
 * - RF-39 Desactivar Rol
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clGrupoRolType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('nbGrupoRol');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clGrupoRol'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clGrupoRoltype';
    }
}
