<?php

/**
 * Descripción de la clDviBaremoType
 * @author Jorge Duque
 */
namespace sagaco\AdminBundle\Form\Backend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clDviBaremoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $objConstructor
     * @param array $arrOpcion
     */
    public function buildForm(FormBuilderInterface $objConstructor, array $arrOpcion)
    {
        $objConstructor
            ->add('nuDviRespuesta')
            ->add('inIntere1')
            ->add('inIntere2')
            ->add('inIntere21')
            ->add('inIntere4')
            ->add('inIntere5')
            ->add('inIntere6')
            ->add('inIntere7')
            ->add('inIntere8')
            ->add('inIntere9')
            ->add('inIntere10')
            ->add('inIntere11')
            ->add('inIntere12')
            ->add('inIntere13')
            ->add('inIntere14')
            ->add('inIntere15')
            ->add('inIntere16')
            ->add('inIntere17')
            ->add('inIntere18');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sagaco\DsagacoBundle\Entity\clDviBaremo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sagaco_adminbundle_clDviBaremotype';
    }
}
