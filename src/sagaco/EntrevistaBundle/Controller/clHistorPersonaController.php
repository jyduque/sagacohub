<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace sagaco\EntrevistaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use sagaco\DsagacoBundle\Entity\clHistorPersona;
use sagaco\EntrevistaBundle\Form\Extranet\clHistorPersonaType;
use sagaco\DsagacoBundle\Entity\clPersona;


/**
 * Controlador de clHistorPersona.
 *
 * @Route("/pgHistorPersona")
 */
class clHistorPersonaController extends Controller 
{
    var $blnBandera;
    
    /**
     * Lists todas las entidades de clCita.
     *
     * @Route("/", name="pgHistorPersona")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $objPeticion)
    {
        $inDocente = '2'; //Debe venir de las variables de sesión
        $em = $this->getDoctrine()->getManager();

        $objEntidad = $em->getRepository('DsagacoBundle:clHistorPersona')->findBy(array('coOrientador'=>$inDocente)); 
        
        //var_dump($objEntidad);  //die;
                
        $objPaginador  = $this->get('knp_paginator');
        $objPagina = $objPaginador->
                paginate($objEntidad, 
                        $objPeticion->query->get('page', 1)/*page number*/, 5/*limit per page*/);
        
        // set an array of custom parameters
        //La clase pull-right envía el paginador a mano derecha
        $objPagina->setCustomParameters(array('class' => 'pull-right'));        

        return ['objPagina' => $objPagina
            ];
    } 
    
    /**
     * Crea una entidad tipo clHistorPersona nueva.
     *
     * @Route("/", name="pgHistorPersona_crear")
     * @Method("POST")
     * @Template("EntrevistaBundle:clHistorPersona:registrar.html.twig")
     */
    public function crearAction(Request $objPeticion)
    {
        $objEntidad = new clHistorPersona();
        $objPersona = new clPersona();
        $idPersona = 2;
        $form = $this->generarForma($objEntidad);
        $form->handleRequest($objPeticion);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $objPersona = $em->getRepository('DsagacoBundle:clPersona')->find($idPersona);
            $objEntidad->setCoPersona($objPersona);
            //$objEntidad->setFhActualizacion(new \DateTime());
            $em->persist($objEntidad);
            $em->flush();
            $blnBandera = 1;

            //return $this->redirect($this->generateUrl('pgHistorPersona_mostrar', array('id' => $objEntidad->getCoHistorPersona(), 'blnBandera' => $blnBandera)));
            return $this->redirect($this->generateUrl('pgHistorPersona'));
        }

        return array(
            'objEntidad' => $objEntidad,
            'form'   => $form->createView(),
        );
        
    }

    /**
     * Genera una forma para crear una entidad de tipo clHistorPersona.
     *
     * @param ClHistorPersona $objEntidad La entidad
     *
     * @return \Symfony\Component\Form\Form La forma
     */
    private function generarForma(clHistorPersona $objEntidad)
    {
        $form = $this->createForm(new clHistorPersonaType(), $objEntidad, array(
            'action' => $this->generateUrl('pgHistorPersona_crear'),
            'method' => 'POST',
        ));        

        $form->add('submit', 'submit', array('label' => 'Solicitar'));

        return $form;        
    }

    /**
     * Desplega un forma para crear una nueva entidad tipo clCita.
     *
     * @Route("/registrar", name="pgHistorPersona_registrar")
     * @Method("GET")
     * @Template()
     */
    public function registrarAction()
    {
        $objPersona = new clPersona();
        $objEstudiante = new \sagaco\DsagacoBundle\Entity\clControEstudio();
        $objRecursosH = new \sagaco\DsagacoBundle\Entity\clRecursHumano();
        $idPersona = 2; //Debe venir desde variables de sesión.
        $em = $this->getDoctrine()->getManager(); 
        $objPersona = $em->getRepository('DsagacoBundle:clPersona')->find($idPersona);
        if ($objPersona){
            if( $objPersona->getInEstudiante() == true){
                $objEstudiante = $em->getRepository('DsagacoBundle:clControEstudio')->find($objPersona->getCoControEstudio());
            } 
            else {
                $objRecursosH = $em->getRepository('DsagacoBundle:clRecursHumano')->find($objPersona->getCoRecursHumano());                
            }            
        }            
        $objEntidad = new clHistorPersona();
        $form   = $this->generarForma($objEntidad);

        return array(
            'objEntidad' => $objEntidad,
            'objPersona' => $objPersona,
            'objEstudiante' => $objEstudiante,
            'objRecursosH' => $objRecursosH,
            'form'   => $form->createView(),
        );              
    }
    
}
