<?php

/**
 * Descripción de la clGeneroType
 * La clase crea el formulario para los requerimientos:
 * - RF-73 Registrar Genero
 * - RF-74 Consultar Genero
 * - RF-75 Modificar Genero
 * - RF-76 Actualizar Genero
 * - RF-77 Eliminara Genero
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clGeneroType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('inGenero')
            ->add('nbGenero');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clGenero'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clGenerotype';
    }
}
