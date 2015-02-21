<?php

namespace sagaco\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use sagaco\DsagacoBundle\Entity\clAgendaOrientador;
use sagaco\AdminBundle\Form\Backend\clAgendaOrientadorType;

/**
 * Controlador de clAgendaOrientador.
 *
 * @Route("/pgAgendaOrientador")
 */
class clAgendaOrientadorController extends Controller
{
    var $blnBandera;
    
    /**
     * Lists todas las entidades de clAgendaOrientador.
     *
     * @Route("/", name="pgAgendaOrientador")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $objPeticion)
    {
        $em = $this->getDoctrine()->getManager();

        //$objEntidad = $em->getRepository('DsagacoBundle:clAgendaOrientador')->listar();    
        
        
        $objEntidad = $em->getRepository('DsagacoBundle:clAgendaOrientador')->findAll();        
        
        
                
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
     * Crea una entidad tipo clAgendaOrientador nueva.
     *
     * @Route("/", name="pgAgendaOrientador_crear")
     * @Method("POST")
     * @Template("DsagacoBundle:clAgendaOrientador:registrar.html.twig")
     */
    public function crearAction(Request $objPeticion)
    {
        $objEntidad = new clAgendaOrientador();
        $form = $this->generarForma($objEntidad);
        $form->handleRequest($objPeticion);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $objEntidad->setFhCreacion(new \DateTime());
            $objEntidad->setFhActualizacion(new \DateTime());
            $em->persist($objEntidad);
            $em->flush();
            $blnBandera = 1;

            return $this->redirect($this->generateUrl('pgAgendaOrientador_mostrar', array('id' => $objEntidad->getCoAgendaOrientador(), 'blnBandera' => $blnBandera)));
        }

        return array(
            'objEntidad' => $objEntidad,
            'form'   => $form->createView(),
        );
        
    }

    /**
     * Genera una forma para crear una entidad de tipo clGrupoRol.
     *
     * @param clAgendaOrientador $objEntidad La entidad
     *
     * @return \Symfony\Component\Form\Form La forma
     */
    private function generarForma(clAgendaOrientador $objEntidad)
    {
        $form = $this->createForm(new clAgendaOrientadorType(), $objEntidad, array(
            'action' => $this->generateUrl('pgAgendaOrientador_crear'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;        
    }

    /**
     * Desplega un forma para crear una nueva entidad tipo clGrupoRol.
     *
     * @Route("/registrar", name="pgAgendaOrientador_registrar")
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
     * Muestra una entidad específica de tipo clAgendaOrientador.
     *
     * @Route("/{id},{blnBandera}", name="pgAgendaOrientador_mostrar")
     * @Method("GET")
     * @Template()
     */
    public function mostrarAction($id, $blnBandera)
    {
        $em = $this->getDoctrine()->getManager();

        $objEntidad = $em->getRepository('DsagacoBundle:clAgendaOrientador')->find($id);

        if (!$objEntidad) {
            throw $this->createNotFoundException('Imposible encontrar el Área.');
        }

        $objEliminForma = $this->eliminarForma($id);

        return ['objEntidad' => $objEntidad,
            'blnBandera' => $blnBandera,
            'delete_form' => $objEliminForma->createView(),
            ];        
    }

    /**
     * Desplega la forma para actualizar una entidad de clAgendaOrientador existente.
     *
     * @Route("/{id}/editar", name="pgAgendaOrientador_editar")
     * @Method("GET")
     * @Template()
     */
    public function editarAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $objEntidad = $em->getRepository('DsagacoBundle:clAgendaOrientador')->find($id);

        if (!$objEntidad) {
            throw $this->createNotFoundException('Imposible encontrar el área.');
        }

        $objEditarForma = $this->editarForma($objEntidad);
        $objEliminForma = $this->eliminarForma($id);

        return array(
            'objEntidad'      => $objEntidad,
            'edit_form'   => $objEditarForma->createView(),
            'delete_form' => $objEliminForma->createView(),
        );        
    }

    /**
    * Crea una forma para actualizar una entidad de clAgendaOrientador.
    *
    * @param clAgendaOrientador $objEntidad La entidad
    *
    * @return \Symfony\Component\Form\Form La forma
    */
    private function editarForma(clAgendaOrientador $objEntidad)
    {
        $form = $this->createForm(new clAgendaOrientadorType(), $objEntidad, array(
            'action' => $this->generateUrl('pgAgendaOrientador_actualizar', array('id' => $objEntidad->getCoAgendaOrientador())),
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
     * Edita una entidad de clAgendaOrientador existente.
     *
     * @Route("/{id}", name="pgAgendaOrientador_actualizar")
     * @Method("PUT")
     * @Template("DsagacoBundle:clAgendaOrientador:editar.html.twig")
     */
    public function actualizarAction(Request $objPeticion, $id)
    {
        $em = $this->getDoctrine()->getManager();
        

        $objEntidad = $em->getRepository('DsagacoBundle:clAgendaOrientador')->find($id);

        if (!$objEntidad) {
            throw $this->createNotFoundException('Imposible encontrar el área.');
        }

        $objEliminForma = $this->eliminarForma($id);
        $objEditarForma = $this->editarForma($objEntidad);
        $objEditarForma->handleRequest($objPeticion);

        if ($objEditarForma->isValid()) {
            $objEntidad->setFhActualizacion(new \DateTime());
            $em->flush();
            
            $blnBandera = 2;

            //return $this->redirect($this->generateUrl('pgRol_editar', array('id' => $id)));
            return $this->redirect($this->generateUrl('pgAgendaOrientador_mostrar', array('id' => $id, 'blnBandera' => $blnBandera)));
        }

        return array(
            'objEntidad'      => $objEntidad,
            'edit_form'   => $objEditarForma->createView(),
            'delete_form' => $objEliminForma->createView(),
        );        
    }
    
    /**
     * Elimina una entidadde clAgendaOrientador.
     *
     * @Route("/{id}", name="pgAgendaOrientador_eliminar")
     * @Method("DELETE")
     */
    public function eliminarAction(Request $objPeticion, $id)
    {
        $form = $this->eliminarForma($id);
        $form->handleRequest($objPeticion);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $objPeticion = $em->getRepository('DsagacoBundle:clAgendaOrientador')->find($id);

            if (!$objPeticion) {
                throw $this->createNotFoundException('Imposible encontrar el área.');
            }

            $em->remove($objPeticion);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pgAgendaOrientador'));        
    }

    /**
     * Crea una forma para eliminar una entidad por el id de clAgendaOrientador.
     *
     * @param mixed $id id de la Entidad
     *
     * @return \Symfony\Component\Form\Form La Forma
     */
    private function eliminarForma($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pgAgendaOrientador_eliminar', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('boton', 'submit', ['label' => ' ', 'button_class' => 'btn btn-xs glyphicon glyphicon-trash', 'attr' => ['data-toggle' => 'tooltip',
                'data-placement' => 'bottom',
                'title' => '',
                'data-original-title' => 'Eliminar']])
            ->getForm()
        ;        
    }
    
}
