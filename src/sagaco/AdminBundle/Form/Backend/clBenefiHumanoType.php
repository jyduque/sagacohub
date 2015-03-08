<?php

/**
 * Descripción de la clBenefiHumanoType
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clBenefiHumanoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('coRecursHumano')
            ->add('nuCedula')
            ->add('inNacionalidad')
            ->add('txPrimerNombre')
            ->add('txSegundNombre')
            ->add('txPrimerApellido')
            ->add('txSegundApellido')
            ->add('txParentesco')
            ->add('inSexo')
            ->add('inEstadoCivil')
            ->add('txCorreoElectronico')
            ->add('txTelefoHabitacion')
            ->add('txTelefoCelular')
            ->add('txLugarResidencia');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clBenefiHumano'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clBenefiHumanotype';
    }
}
