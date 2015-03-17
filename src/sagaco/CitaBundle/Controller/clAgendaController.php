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
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();       
        
        $intOrientador = '1';
        $intSemestre = '1';        
        $id=1;
        
        $objEntidad = $em->getRepository('DsagacoBundle:clAgendaOrientador')->findOneBy(
                array(
		'coOrientador' => $intOrientador,
		'coSemestre' => $intSemestre
                ));  
        return ['objEntidad' => $objEntidad];
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
}
