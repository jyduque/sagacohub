<?php

namespace sagaco\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sagaco\DsagacoBundle\Entity\clGrupoRol;
use Doctrine\ORM\Mapping as ORM;

class DefaultController extends Controller
{
    public function rolAction()
    {
        // CODIGO PARA INSERTAR DATOS CON DOCTRINE2
        
        $objGrupo = new clGrupoRol();
        $objConsulGrupo = new clGrupoRol();
        
                
        $objGrupo->setCoTipoRol(2);
        $objGrupo->setTxDescripcion('prueba2');
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($objGrupo);
        $em->flush(); 
        
        // CODIGO OBTENER INFORMACION CON DOCTRINE2
        
        $objConsulGrupo = $em->getRepository('DsagacoBundle:clGrupoRol')->find(5);
        
        return $this->render('AdminBundle:Default:pgRol.html.twig',array('visRol' => $objConsulGrupo));              
    }
}
