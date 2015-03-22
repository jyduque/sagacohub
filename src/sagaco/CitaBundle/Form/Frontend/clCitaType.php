<?php

namespace sagaco\CitaBundle\Form\Frontend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class clCitaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            //->add('disponible', new clDisponCalendarioType(), array(
                //'data_class' => 'sagaco\DsagacoBundle\Entity\clCita',
            //    'mapped' => false
            //))    
            //->add('feCita')
            //->add('hoCita')
            //->add('coCitaReprogramada')
            //->add('inCambioEspecialidad')
            //->add('fhRegistCita')
            ->add('txObservacion')
            //->add('timezone')
            //->add('fhCreacion')
            //->add('fhActualizacion')
            ->add('coArea')
            //->add('coEstadoCita')
            //->add('coPersona')
            //->add('coOrientador')
            ->add('idDocente', 'hidden', array(
                'mapped' => false
            ))    
        ;
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
