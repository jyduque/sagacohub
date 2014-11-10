<?php

namespace sagaco\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use sagaco\DsagacoBundle\Entity\clGrupoRol;
use sagaco\AdminBundle\Form\Backend\clGrupoRolType;
use Doctrine\ORM\Mapping as ORM;

class DefaultController extends Controller
{
    public function rolAction()
    {
        $em = $this->getDoctrine()->getManager();
        $peticion = $this->getRequest();
        
        // Crea el objeto de la entidad clGrupoRol para manejar la tabla tb_grupo_rol        
        $objGrupo = new clGrupoRol();
        
        // Crea el objeto del formulario clGrupoRolType para enviar a la plantilla
        $objGrupo->setTxDescripcion('prueb');
        $objFormulario = $this->createForm(new clGrupoRolType(), $objGrupo);
        
        $objFormulario->handleRequest($peticion);
        
        if ($objFormulario->isValid())
        {
            $em->persist($objGrupo);
            $em->flush();
            
            //$this->get('session')->getFlashBag()->add('info', 'Los datos del rol se han actualizado correctamente');
 
            return $this->redirect($this->generateUrl('pg_rol'));
        }
        
        return $this->render('AdminBundle:Default:pgRol.html.twig', array(
            'form' => $objFormulario->createView(),
        ));
    }
}
