<?php

/**
 * Description of clGrupoRolType
 * La clase crea el formulario para los requerimientos:
 * - RF-35 Registrar Rol
 * - RF-37 Consultar Rol
 * - RF-38 Modificar datos del rol
 * @author Jorge Duque
 */

namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clGrupoRolType extends AbstractType 
{
    //put your code here
    public function buildForm(FormBuilderInterface $contructor, array $opciones)
    {
        $contructor
            ->add('CoTipoRol')
            ->add('TxDescripcion')
            ->add('dueDate', null, array('mapped' => false))
            ->add('Guardar', 'submit');
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'sagaco\DsagacoBundle\Entity\clGrupoRol'));
    }
    public function getName()
    {
        return 'sagaco_adminbundle_clgruporoltype';
    }
}
