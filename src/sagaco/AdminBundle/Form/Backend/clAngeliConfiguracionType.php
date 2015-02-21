<?php

/**
 * Descripción de la clAngeliConfiguracionType
 * La clase crea el formulario para los requerimientos:
 * - RF-23 Ejecutar Prueba Vocacional Angelini
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clAngeliConfiguracionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('coAngeliInteres')
            ->add('nuCuadro')
            ->add('txLetra')
            ->add('txDescripcion')
            ->add('txObservacion');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clAngeliConfiguracion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clAngeliConfiguraciontype';
    }
}
