<?php

namespace sagaco\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use sagaco\DsagacoBundle\Entity\clEstado;
use sagaco\AdminBundle\Form\Backend\clEstadoType;

/**
 * Controlador de clEstado.
 *
 * @Route("/pgEstado")
 */
class clEstadoController extends Controller
{
    var $blnBandera;
    
    /**
     * Lists todas las entidades de clEstado.
     *
     * @Route("/", name="pgEstado")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $objPeticion)
    {
        $em = $this->getDoctrine()->getManager();

        //$objEntidad = $em->getRepository('DsagacoBundle:clEstado')->listar();    
        
        
        $objEntidad = $em->getRepository('DsagacoBundle:clEstado')->findAll();        
        
        
                
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
     * Crea una entidad tipo clEstado nueva.
     *
     * @Route("/", name="pgEstado_crear")
     * @Method("POST")
     * @Template("DsagacoBundle:clEstado:registrar.html.twig")
     */
    public function crearAction(Request $objPeticion)
    {
        $objEntidad = new clEstado();
        $form = $this->generarForma($objEntidad);
        $form->handleRequest($objPeticion);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $objEntidad->setFhCreacion(new \DateTime());
            $objEntidad->setFhActualizacion(new \DateTime());
            $em->persist($objEntidad);
            $em->flush();
            $blnBandera = 1;

            return $this->redirect($this->generateUrl('pgEstado_mostrar', array('id' => $objEntidad->getCoEstado(), 'blnBandera' => $blnBandera)));
        }

        return array(
            'objEntidad' => $objEntidad,
            'form'   => $form->createView(),
        );
        
    }

    /**
     * Genera una forma para crear una entidad de tipo clGrupoRol.
     *
     * @param clEstado $objEntidad La entidad
     *
     * @return \Symfony\Component\Form\Form La forma
     */
    private function generarForma(clEstado $objEntidad)
    {
        $form = $this->createForm(new clEstadoType(), $objEntidad, array(
            'action' => $this->generateUrl('pgEstado_crear'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;        
    }

    /**
     * Desplega un forma para crear una nueva entidad tipo clGrupoRol.
     *
     * @Route("/registrar", name="pgEstado_registrar")
     * @Method("GET")
     * @Template()
     */
    public function registrarAction()
    {
        $objEntidad = new clEstado();
        $form   = $this->generarForma($objEntidad);

        return array(
            'objEntidad' => $objEntidad,
            'form'   => $form->createView(),
        );              
    }

    /**
     * Muestra una entidad específica de tipo clEstado.
     *
     * @Route("/{id},{blnBandera}", name="pgEstado_mostrar")
     * @Method("GET")
     * @Template()
     */
    public function mostrarAction($id, $blnBandera)
    {
        $em = $this->getDoctrine()->getManager();

        $objEntidad = $em->getRepository('DsagacoBundle:clEstado')->find($id);

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
     * Desplega la forma para actualizar una entidad de clEstado existente.
     *
     * @Route("/{id}/editar", name="pgEstado_editar")
     * @Method("GET")
     * @Template()
     */
    public function editarAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $objEntidad = $em->getRepository('DsagacoBundle:clEstado')->find($id);

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
    * Crea una forma para actualizar una entidad de clEstado.
    *
    * @param clEstado $objEntidad La entidad
    *
    * @return \Symfony\Component\Form\Form La forma
    */
    private function editarForma(clEstado $objEntidad)
    {
        $form = $this->createForm(new clEstadoType(), $objEntidad, array(
            'action' => $this->generateUrl('pgEstado_actualizar', array('id' => $objEntidad->getCoEstado())),
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
     * Edita una entidad de clEstado existente.
     *
     * @Route("/{id}", name="pgEstado_actualizar")
     * @Method("PUT")
     * @Template("DsagacoBundle:clEstado:editar.html.twig")
     */
    public function actualizarAction(Request $objPeticion, $id)
    {
        $em = $this->getDoctrine()->getManager();
        

        $objEntidad = $em->getRepository('DsagacoBundle:clEstado')->find($id);

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
            return $this->redirect($this->generateUrl('pgEstado_mostrar', array('id' => $id, 'blnBandera' => $blnBandera)));
        }

        return array(
            'objEntidad'      => $objEntidad,
            'edit_form'   => $objEditarForma->createView(),
            'delete_form' => $objEliminForma->createView(),
        );        
    }
    
    /**
     * Elimina una entidadde clEstado.
     *
     * @Route("/{id}", name="pgEstado_eliminar")
     * @Method("DELETE")
     */
    public function eliminarAction(Request $objPeticion, $id)
    {
        $form = $this->eliminarForma($id);
        $form->handleRequest($objPeticion);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $objPeticion = $em->getRepository('DsagacoBundle:clEstado')->find($id);

            if (!$objPeticion) {
                throw $this->createNotFoundException('Imposible encontrar el área.');
            }

            $em->remove($objPeticion);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pgEstado'));        
    }

    /**
     * Crea una forma para eliminar una entidad por el id de clEstado.
     *
     * @param mixed $id id de la Entidad
     *
     * @return \Symfony\Component\Form\Form La Forma
     */
    private function eliminarForma($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pgEstado_eliminar', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('boton', 'submit', ['label' => ' ', 'button_class' => 'btn btn-xs glyphicon glyphicon-trash', 'attr' => ['data-toggle' => 'tooltip',
                'data-placement' => 'bottom',
                'title' => '',
                'data-original-title' => 'Eliminar']])
            ->getForm()
        ;        
    }
    
}
