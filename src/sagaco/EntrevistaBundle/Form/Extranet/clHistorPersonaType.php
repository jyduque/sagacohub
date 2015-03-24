<?php

namespace sagaco\EntrevistaBundle\Form\Extranet;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clHistorPersonaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('inActivo')
            //->add('feInicio')
            //->add('feCierre')
            ->add('inEstudia')
            ->add('txEstudiEspecifique')
            ->add('inSoliciEspontanea')
            ->add('inTrabaja')
            ->add('txLugarTrabajo')
            ->add('txDireccion1')
            ->add('txDireccion2')
            ->add('txSugerido')
            ->add('txObservacion', 'textarea', array(
                'attr' => array('rows' => 3)))
            //->add('fhCreacion')
            //->add('fhActualizacion')
            //->add('coCiudad')
            //->add('coPersona')
            ->add('coOrientador')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clHistorPersona'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_dsagacobundle_clhistorpersona';
    }
}
