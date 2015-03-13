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

        //$objEntidad = $em->getRepository('DsagacoBundle:clAgendaOrientador')->listar();  
        
        $intOrientador = '1';
        $intSemestre = '1';
        
        
        //$objEntidad = $em->getRepository('DsagacoBundle:clAgendaOrientador')->calendario($intOrientador, $intSemestre);        
        $id=1;
        $objEntidad = $em->getRepository('DsagacoBundle:clAgendaOrientador')->find($id);  
        
        
        
                
       
        //return $this->render('CitaBundle:clAgenda:index.html.twig',
          //      array('objEntidad' => $objEntidad));
        return ['objEntidad' => $objEntidad];
    }  
}
