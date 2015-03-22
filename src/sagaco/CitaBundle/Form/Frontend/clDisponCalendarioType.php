<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace sagaco\CitaBundle\Form\Frontend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/**
 * Description of TaskType
 *
 * @author Usuario
 */
class clDisponCalendarioType extends AbstractType{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('hoCalendario');

        $builder->add('diDisponDocente', 'collection', array('type' => new clDisponDocenteType()));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'virtual' => true,
        ));
    }

    public function getName()
    {
        return 'disponible';
    }
}
