<?php

/**
 * Descripción de la clDviInteresType
 * La clase crea el formulario para los requerimientos:
 * - RF-21 Ejecutar Prueba Vocacional DVI
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clDviInteresType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('coDviArea')
            ->add('nbDviInteres');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clDviInteres'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clDviInterestype';
    }
}
