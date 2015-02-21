<?php

/**
 * Descripción de la clOrientadorType
 * La clase crea el formulario para los requerimientos:
 * - RF-40 Registrar Orientador
 * - RF-41 Activar Orientador
 * - RF-42 Desactivar Orientador
 * - RF-43 Modificar Datos del Orientador
 * - RF-44 Consultar Información del Orientador 
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clOrientadorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('txProfesion')
            ->add('txCarrerAtendida')
            ->add('txPeriodVigencia')
            ->add('txComentario')
            ->add('coRecursHumano');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clOrientador'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clOrientadortype';
    }
}
