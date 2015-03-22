<?php

/**
 * Descripción de la clCitaType
 * La clase crea el formulario para los requerimientos:
 * - RF-01 Registrar Cita (Titular)
 * - RF-02 Registrar Cita (Beneficiario)
 * - RF-03 Reprogramar Cita
 * - RF-04 Consultar Cita
 * - RF-05 Eliminar Cita
 * - RF-06 Configurar Agenda Personalizada
 * - RF-07 Modificar Agenda Personalizada
 * - RF-08 Consultar Agenda Personalizada
 * - RF-09 Cancelar Cita
 * - RF-52 Listar Citas Programadas
 * - RF-53 Visualizar Detalle de Cita
 * - RF-56 Visualizar Horario Cita
 * @author Jorge Duque
 */
namespace sagaco\CitaBundle\Form\Frontend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clCitaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            // Suponiendo que el esta siendo usuario es un obrero de la UNET 
            ->add('coArea'); //clRecursHumano para poner el primer apellido del(de la) orentador(a)
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clCita'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_citabundle_clCitatype';
    }
}
