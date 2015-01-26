<?php

namespace sagaco\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use sagaco\DsagacoBundle\Entity\clGrupoRol;
use sagaco\AdminBundle\Form\Backend\clGrupoRolType;

/**
 * clGrupoRol controller.
 *
 * @Route("/pgRol")
 */
class clGrupoRolController extends Controller
{
    var $blnBandera;
    
    /**
     * Lists all clGrupoRol entities.
     *
     * @Route("/", name="pgRol")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        #$objGrupoRol = $em->getRepository('DsagacoBundle:clGrupoRol')->findAll();
        
        $objGrupoRol = $em->getRepository('DsagacoBundle:clGrupoRol')->listar();    
        
                
        $objPaginador  = $this->get('knp_paginator');
        $objPagina = $objPaginador->
                paginate($objGrupoRol, 
                        $request->query->get('page', 1)/*page number*/, 5/*limit per page*/);
        
        // set an array of custom parameters
        //La clase pull-right envía el paginador a mano derecha
        $objPagina->setCustomParameters(array('class' => 'pull-right'));        

        return ['objGrupoRol' => $objGrupoRol,
            'objPagina' => $objPagina,
            ];
    }
    
    /**
     * Crea una entidad tipo clGrupoRol nueva.
     *
     * @Route("/", name="pgRol_crear")
     * @Method("POST")
     * @Template("DsagacoBundle:clGrupoRol:registrar.html.twig")
     */
    public function crearAction(Request $objPeticion)
    {
        $objGrupoRol = new clGrupoRol();
        $form = $this->generarForma($objGrupoRol);
        $form->handleRequest($objPeticion);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $objGrupoRol->setFhCreacion(new \DateTime());
            $objGrupoRol->setFhActualizacion(new \DateTime());
            $em->persist($objGrupoRol);
            $em->flush();
            $blnBandera = 1;

            return $this->redirect($this->generateUrl('pgRol_mostrar', array('id' => $objGrupoRol->getCoGrupoRol(), 'blnBandera' => $blnBandera)));
        }

        return array(
            'objGrupoRol' => $objGrupoRol,
            'form'   => $form->createView(),
        );
        
    }

    /**
     * Genera una forma para crear una entidad de tipo clGrupoRol.
     *
     * @param clGrupoRol $objGrupoRol La entidad
     *
     * @return \Symfony\Component\Form\Form La forma
     */
    private function generarForma(clGrupoRol $objGrupoRol)
    {
        $form = $this->createForm(new clGrupoRolType(), $objGrupoRol, array(
            'action' => $this->generateUrl('pgRol_crear'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;        
    }

    /**
     * Desplega un forma para crear una nueva entidad tipo clGrupoRol.
     *
     * @Route("/registrar", name="pgRol_registrar")
     * @Method("GET")
     * @Template()
     */
    public function registrarAction()
    {
        $objGrupoRol = new clGrupoRol();
        $form   = $this->generarForma($objGrupoRol);

        return array(
            'objGrupoRol' => $objGrupoRol,
            'form'   => $form->createView(),
        );              
    }

    /**
     * Muestra una entidad específica de tipo clGrupoRol.
     *
     * @Route("/{id},{blnBandera}", name="pgRol_mostrar")
     * @Method("GET")
     * @Template()
     */
    public function mostrarAction($id, $blnBandera)
    {
        $em = $this->getDoctrine()->getManager();

        $objGrupoRol = $em->getRepository('DsagacoBundle:clGrupoRol')->find($id);

        if (!$objGrupoRol) {
            throw $this->createNotFoundException('Imposible encontrar el Rol.');
        }

        $objEliminForma = $this->eliminarForma($id);

        return ['objGrupoRol' => $objGrupoRol,
            'blnBandera' => $blnBandera,
            'delete_form' => $objEliminForma->createView(),
            ];        
    }

    /**
     * Desplega la forma para actualizar una entidad de clGrupoRol existente.
     *
     * @Route("/{id}/editar", name="pgRol_editar")
     * @Method("GET")
     * @Template()
     */
    public function editarAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $objGrupoRol = $em->getRepository('DsagacoBundle:clGrupoRol')->find($id);

        if (!$objGrupoRol) {
            throw $this->createNotFoundException('Imposible encontrar el Rol.');
        }

        $objEditarForma = $this->editarForma($objGrupoRol);
        $objEliminForma = $this->eliminarForma($id);

        return array(
            'objGrupoRol'      => $objGrupoRol,
            'edit_form'   => $objEditarForma->createView(),
            'delete_form' => $objEliminForma->createView(),
        );        
    }

    /**
    * Crea una forma para actualizar una entidad de clGrupoRol.
    *
    * @param clGrupoRol $objGrupoRol La entidad
    *
    * @return \Symfony\Component\Form\Form La forma
    */
    private function editarForma(clGrupoRol $objGrupoRol)
    {
        $form = $this->createForm(new clGrupoRolType(), $objGrupoRol, array(
            'action' => $this->generateUrl('pgRol_actualizar', array('id' => $objGrupoRol->getCoGrupoRol())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Actualizar'));
        $form->add('submit', 'submit', ['label' => 'Actualizar', 'attr' => ['data-toggle' => 'tooltip',
                'data-placement' => 'bottom',
                'title' => '',
                'data-original-title' => 'Actualizar']]);
        

        return $form;        
    }
    
    /**
     * Edita una entidad de clGrupoRol existente.
     *
     * @Route("/{id}", name="pgRol_actualizar")
     * @Method("PUT")
     * @Template("DsagacoBundle:clGrupoRol:editar.html.twig")
     */
    public function actualizarAction(Request $objPeticion, $id)
    {
        $em = $this->getDoctrine()->getManager();
        

        $objGrupoRol = $em->getRepository('DsagacoBundle:clGrupoRol')->find($id);

        if (!$objGrupoRol) {
            throw $this->createNotFoundException('Imposible encontrar el Rol.');
        }

        $objEliminForma = $this->eliminarForma($id);
        $objEditarForma = $this->editarForma($objGrupoRol);
        $objEditarForma->handleRequest($objPeticion);

        if ($objEditarForma->isValid()) {
            $objGrupoRol->setFhActualizacion(new \DateTime());
            $em->flush();
            
            $blnBandera = 2;

            //return $this->redirect($this->generateUrl('pgRol_editar', array('id' => $id)));
            return $this->redirect($this->generateUrl('pgRol_mostrar', array('id' => $id, 'blnBandera' => $blnBandera)));
        }

        return array(
            'objGrupoRol'      => $objGrupoRol,
            'edit_form'   => $objEditarForma->createView(),
            'delete_form' => $objEliminForma->createView(),
        );        
    }
    
    /**
     * Elimina una entidadde clGrupoRol.
     *
     * @Route("/{id}", name="pgRol_eliminar")
     * @Method("DELETE")
     */
    public function eliminarAction(Request $objPeticion, $id)
    {
        $form = $this->eliminarForma($id);
        $form->handleRequest($objPeticion);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $objPeticion = $em->getRepository('DsagacoBundle:clGrupoRol')->find($id);

            if (!$objPeticion) {
                throw $this->createNotFoundException('Imposible encontrar el Rol.');
            }

            $em->remove($objPeticion);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pgRol'));        
    }

    /**
     * Crea una forma para eliminar una entidad por el id de clGrupoRol.
     *
     * @param mixed $id id de la Entidad
     *
     * @return \Symfony\Component\Form\Form La Forma
     */
    private function eliminarForma($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pgRol_eliminar', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('boton', 'submit', ['label' => ' ', 'button_class' => 'btn btn-xs glyphicon glyphicon-trash', 'attr' => ['data-toggle' => 'tooltip',
                'data-placement' => 'bottom',
                'title' => '',
                'data-original-title' => 'Eliminar']])
            ->getForm()
        ;        
    }
    
}
