<?php

namespace sagaco\CitaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use sagaco\DsagacoBundle\Entity\clAgendaOrientador;
use sagaco\DsagacoBundle\Entity\clDetallAgendaorientador;
use sagaco\CitaBundle\Form\Extranet\clAgendaOrientadorType;
use Symfony\Component\HttpFoundation\Request;
//use sagaco\DsagacoBundle\Entity\clAgendaOrientadorRepository;
//use sagaco\CitaBundle\Form\Extranet\clAgendaOrientadorType;


/**
 * Controlador de clAgendaOrientador.
 *
 * @Route("/pgAgenda")
 */
class clAgendaController extends Controller
{
    var $blnBandera;
    
    /**
     * Lists todas las entidades de clAgendaOrientador.
     *
     * @Route("/", name="pgAgenda")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $objPeticion)
    {          
        $intOrientador = 1;
        $em = $this->getDoctrine()->getManager();

        $objEntidad = $em->getRepository('DsagacoBundle:clAgendaOrientador')
                ->findBy(
                        array('coOrientador' => $intOrientador),
                        array('coSemestre' => 'ASC'));        
                
        $objPaginador  = $this->get('knp_paginator');
        $objPagina = $objPaginador->
                paginate($objEntidad, 
                        $objPeticion->query->get('page', 1)/*page number*/, 10/*limit per page*/);
        
        // set an array of custom parameters
        //La clase pull-right envía el paginador a mano derecha
        $objPagina->setCustomParameters(array('class' => 'pull-right'));        

        return ['objPagina' => $objPagina
            ];
    } 
    
    /**
     * Crea una entidad tipo clAgendaOrientador nueva.
     *
     * @Route("/", name="pgAgenda_crear")
     * @Method("POST")
     * @Template("CitaBundle:clAgenda:registrar.html.twig")
     */
    public function crearAction(Request $objPeticion)
    {
        $objEntidad = new clAgendaOrientador();
        $objDetalle = new clDetallAgendaorientador();
        $form = $this->generarForma($objEntidad);
        $form->handleRequest($objPeticion);
        

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager(); 
            //$objEntidad->addDetallAgenda($objDetalle);            
            $objEntidad->setFhCreacion(new \DateTime());
            $objEntidad->setFhActualizacion(new \DateTime());            
            $em->persist($objEntidad);
            //$em->persist($objDetalle);
            $em->flush();
            $blnBandera = 1;

            return $this->redirect($this->generateUrl('pgAgenda_mostrar', array('id' => $objEntidad->getCoAgendaOrientador(), 'blnBandera' => $blnBandera)));
        }
        else {
            return array(
            'objEntidad' => $objEntidad,
            'form'   => $form->createView(),
            );
        }

        return array(
            'objEntidad' => $objEntidad,
            'form'   => $form->createView(),
        );        
    }
    
    /**
     * Genera una forma para crear una entidad de tipo clAgendaOrientador.
     *
     * @param clAgendaOrientador $objEntidad La entidad
     *
     * @return \Symfony\Component\Form\Form La forma
     */
    private function generarForma(clAgendaOrientador $objEntidad)
    {
        $form = $this->createForm(new clAgendaOrientadorType(), $objEntidad, array(
            'action' => $this->generateUrl('pgAgenda_crear'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Configurar'));

        return $form;        
    }

    /**
     * Desplega un forma para crear una nueva entidad tipo clAgendaOrientador.
     *
     * @Route("/registrar", name="pgAgenda_registrar")
     * @Method("GET")
     * @Template()
     */
    public function registrarAction()
    {
        $objEntidad = new clAgendaOrientador();
        $form   = $this->generarForma($objEntidad);

        return array(
            'objEntidad' => $objEntidad,
            'form'   => $form->createView(),
        );              
    }
    
    /**
     * Muestra una entidad específica de tipo clAgendaOrientador y clDetallAgendaorientador.
     *
     * @Route("/{id},{blnBandera}", name="pgAgenda_mostrar")
     * @Method("GET")
     * @Template()
     */
    public function mostrarAction($id, $blnBandera)
    {
        $em = $this->getDoctrine()->getManager();

        $objEntidad = $em->getRepository('DsagacoBundle:clAgendaOrientador')->find($id);   
        

        if (!$objEntidad) {
            throw $this->createNotFoundException('Imposible encontrar la Agenda del orientador.');
        }

        //$objEliminForma = $this->eliminarForma($id);

        return ['objEntidad' => $objEntidad,
            'blnBandera' => $blnBandera,
            //'delete_form' => $objEliminForma->createView(),
            ];        
    }
    
    /**
     * Desplega la forma para actualizar una entidad de clAgendaOrientador y clDetallAgendaorientador existente.
     *
     * @Route("/{id}/editar", name="pgAgenda_editar")
     * @Method("GET")
     * @Template()
     */
    public function editarAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $objEntidad = $em->getRepository('DsagacoBundle:clAgendaOrientador')->find($id);

        if (!$objEntidad) {
            throw $this->createNotFoundException('Imposible encontrar la agenda personalizada.');
        }

        $objEditarForma = $this->editarForma($objEntidad);
        //$objEliminForma = $this->eliminarForma($id);

        return array(
            'objEntidad'      => $objEntidad,
            'edit_form'   => $objEditarForma->createView(),
            //'delete_form' => $objEliminForma->createView(),
        );        
    }
    
    /**
    * Crea una forma para actualizar una entidad de clAgendaOrientador y clDetallAgendaorientador.
    *
    * @param clAgendaOrientador $objEntidad La entidad
    *
    * @return \Symfony\Component\Form\Form La forma
    */
    private function editarForma(clAgendaOrientador $objEntidad)
    {
        $form = $this->createForm(new clAgendaOrientadorType(), $objEntidad, array(
            'action' => $this->generateUrl('pgAgenda_actualizar', array('id' => $objEntidad->getCoAgendaOrientador())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));
        /*$form->add('submit', 'submit', ['label' => 'Actualizar', 'attr' => ['data-toggle' => 'tooltip',
                'data-placement' => 'bottom',
                'title' => '',
                'data-original-title' => 'Actualizar']]);*/
        

        return $form;        
    }
    
    /**
     * Edita una entidad de clAgendaOrientador y clDetallAgendaorientador existente.
     *
     * @Route("/{id}", name="pgAgenda_actualizar")
     * @Method("PUT")
     * @Template("CitaBundle:clAgenda:editar.html.twig")
     */
    public function actualizarAction(Request $objPeticion, $id)
    {
        $em = $this->getDoctrine()->getManager();
        

        $objEntidad = $em->getRepository('DsagacoBundle:clAgendaOrientador')->find($id);

        if (!$objEntidad) {
            throw $this->createNotFoundException('Imposible encontrar la agenda personalizada.');
        }

        //$objEliminForma = $this->eliminarForma($id);
        $objEditarForma = $this->editarForma($objEntidad);
        $objEditarForma->handleRequest($objPeticion);

        if ($objEditarForma->isValid()) {
            $objEntidad->setFhActualizacion(new \DateTime());
            // -- OJO si no funciona el crear es porque se añadió esta línea
            $objEntidad->addDetallAgenda($objEntidad->getDetallAgenda());
            $em->persist($objEntidad);
            $em->flush();
            
            $blnBandera = 2;

            //return $this->redirect($this->generateUrl('pgRol_editar', array('id' => $id)));
            return $this->redirect($this->generateUrl('pgAgenda_mostrar', array('id' => $id, 'blnBandera' => $blnBandera)));
        }

        return array(
            'objEntidad'      => $objEntidad,
            'edit_form'   => $objEditarForma->createView(),
            //'delete_form' => $objEliminForma->createView(),
        );        
    }
}
