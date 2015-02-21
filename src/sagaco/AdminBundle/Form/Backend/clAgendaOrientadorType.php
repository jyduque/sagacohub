<?php

/**
 * Descripción de la clAgendaOrientadorType
 * La clase crea el formulario para los requerimientos:
 * - RF-6 Configurar Agenda Personalizada
 * - RF-7 Modificar Agenda Personalizada
 * - RF-8 Consultar Agenda Personalizada
* @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clAgendaOrientadorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('coOrientador')
            ->add('coSemestre')
            ->add('coDiaSemana')
            ->add('hoInicio')
            ->add('coDuracion');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clAgendaOrientador'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clAgendaOrientadortype';
    }
}
