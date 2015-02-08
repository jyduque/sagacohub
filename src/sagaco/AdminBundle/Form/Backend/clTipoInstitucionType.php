<?php

/**
 * Descripción de la clTipoInstitucionType
 * La clase crea el formulario para los requerimientos:
 * - RF-113 Registrar Tipo Institucion
 * - RF-114 Consultar Tipo Institucion
 * - RF-115 Modificar Tipo Institucion
 * - RF-116 Actualizar Tipo Institucion
 * - RF-117 Insertar Tipo Institucion
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clTipoInstitucionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('nbTipoInstitucion');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clTipoInstitucion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clTipoInstituciontype';
    }
}
