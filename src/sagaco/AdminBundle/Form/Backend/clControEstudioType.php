<?php

/**
 * Descripción de la clControEstudioType
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clControEstudioType extends AbstractType
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
            ->add('txTipoIngreso')
            ->add('txCarrera')
            ->add('nuSemestCursados')
            ->add('txSemestActual')
            ->add('txTurno')
            ->add('txCorreoElectronico')
            ->add('txTelefoCasa')
            ->add('txTelefoCelular')
            ->add('txPais')
            ->add('txEstado')
            ->add('txMunicipio')
            ->add('txCiudad')
            ->add('txDireccion1')
            ->add('txDireccion2')
            ->add('feNacimiento', 'date', array(
                'widget' => 'choice',
                'format' => 'dd-MM-yyyy',
                'years' => range(1930, (date("Y") + 150)),
                'empty_value' => array('year' => 'Año', 'month' => 'Mes', 'day' => 'Día'),))
            ->add('txLugarNacimiento')
            ->add('txLapsoIngreso')
            ->add('txCondicion')
            ->add('nuIndiceAcumulado')
            ->add('nuUcCursadas')
            ->add('nuUcActual')
            ->add('nuUcAprobadas');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clControEstudio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clControEstudiotype';
    }
}
