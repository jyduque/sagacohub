<?php

namespace sagaco\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sagaco\DsagacoBundle\Entity\clGrupoRol;
use Doctrine\ORM\Mapping as ORM;

class DefaultController extends Controller
{
    public function rolAction()
    {
        // CREAR EL OBJETO DE LA CLASE clGrupoRol
        
        $objGrupo = new clGrupoRol();
        //$objConsulGrupo = new clGrupoRol();
        
                
        $objGrupo->setCoTipoRol(5);
        $objGrupo->setTxDescripcion('Prueba con formulario');
        
        //$em = $this->getDoctrine()->getManager();
        //$em->persist($objGrupo);
        //$em->flush(); 
        
        // CODIGO OBTENER INFORMACION CON DOCTRINE2
        
        //$objConsulGrupo = $em->getRepository('DsagacoBundle:clGrupoRol')->find(5);
        
        //return $this->render('AdminBundle:Default:pgRol.html.twig',array('visRol' => $objConsulGrupo));              
        
        //CREAR FORMULARIO
        // crea una task y le asigna algunos datos ficticios para este ejemplo
        //$task = new Task();
        //$task->setTask('Write a blog post');
        //$task->setDueDate(new \DateTime('tomorrow'));
 
        $form = $this->createFormBuilder($objGrupo)
            ->add('CoTipoRol', 'text', array('attr' => array('help_text' => 'Letters, numbers and underscores are allowed.')))
            ->add('TxDescripcion', 'text')        
            ->add('save', 'submit')
            ->getForm();
 
        return $this->render('AdminBundle:Default:pgRol.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
