<?php

/**
 * Descripción de la clMotivoConsultaType
 * La clase crea el formulario para los requerimientos:
 * - RF-58 Registrar MotivoConsulta
 * - RF-59 Consultar MotivoConsulta
 * - RF-60 Modificar MotivoConsulta
 * - RF-61 Actualizar MotivoConsulta
 * - RF-62 Eliminar MotivoConsulta 
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clMotivoConsultaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('coArea')
            ->add('nbMotivoConsulta');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clMotivoConsulta'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clMotivoConsultatype';
    }
}
