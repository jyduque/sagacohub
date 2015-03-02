<?php

/**
 * Descripción de la clRecursHumanoType
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clRecursHumanoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('nuCedula')
            ->add('inNacionalidad')
            ->add('txPrimerNombre')
            ->add('txSegundNombre')
            ->add('txPrimerApellido')
            ->add('txSegundApellido')
            ->add('inSexo')
            ->add('inEstadoCivil')
            ->add('txCargo')
            ->add('txCorreoElectronico')
            ->add('txTelefoHabitacion')
            ->add('txTelefoCelular')
            ->add('txTelefoOficina')
            ->add('txLugarResidencia')
            ->add('feNacimiento');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clRecursHumano'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clRecursHumanotype';
    }
}
