<?php

namespace sagaco\CitaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use sagaco\DsagacoBundle\Entity\clCita;
use sagaco\DsagacoBundle\Entity\clArea;
use sagaco\DsagacoBundle\Entity\clOrientador;
use sagaco\DsagacoBundle\Entity\clSemestre;
use sagaco\CitaBundle\Form\Frontend\clCitaType;

/**
 * Controlador de clCita.
 *
 * @Route("/pgCita")
 */
class clCitaController extends Controller
{
    var $blnBandera;
    
    /**
     * Lists todas las entidades de clCita.
     *
     * @Route("/", name="pgCita")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $objPeticion)
    {
        $inPersona = '1';
        $em = $this->getDoctrine()->getManager();

        $objEntidad = $em->getRepository('DsagacoBundle:clCita')->listarCitasPorPersona($inPersona);  
        
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
     * Crea una entidad tipo clCita nueva.
     *
     * @Route("/", name="pgCita_crear")
     * @Method("POST")
     * @Template("CitaBundle:clCita:registrar.html.twig")
     */
    public function crearAction(Request $objPeticion)
    {
        $objEntidad = new clCita();
       // $txObservacion = 'Prueba';
       // $objEntidad->setTxObservacion($txObservacion);
        $form = $this->generarForma($objEntidad);
       // $form->bind($objPeticion);
        $form->handleRequest($objPeticion);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //$objEntidad->setFhCreacion(new \DateTime());
            //$objEntidad->setFhActualizacion(new \DateTime());
            $em->persist($objEntidad);
            $em->flush();
            $blnBandera = 1;

            return $this->redirect($this->generateUrl('pgCita_registrar', array('id' => $objEntidad->getCoCita(), 'blnBandera' => $blnBandera)));
        }

        return array(
            'objEntidad' => $objEntidad,
            'form'   => $form->createView(),
        );
        
    }

    /**
     * Genera una forma para crear una entidad de tipo clCita.
     *
     * @param ClCita $objEntidad La entidad
     *
     * @return \Symfony\Component\Form\Form La forma
     */
    private function generarForma(clCita $objEntidad)
    {
        $form = $this->createForm(new clCitaType(), $objEntidad, array(
            'action' => $this->generateUrl('pgCita_crear'),
            'method' => 'POST',
        ));        

        $form->add('submit', 'submit', array('label' => 'Solicitar'));

        return $form;        
    }

    /**
     * Desplega un forma para crear una nueva entidad tipo clCita.
     *
     * @Route("/registrar", name="pgCita_registrar")
     * @Method("GET")
     * @Template()
     */
    public function registrarAction()
    {
        $objSemestre = new clSemestre();
        $em = $this->getDoctrine()->getManager();
        $objSemestre = $em->getRepository('DsagacoBundle:clSemestre')->findOneBy(array('inActivo' => '1'));
            
        $intSemestre = $objSemestre->getCoSemestre(); //Semestre
        //var_dump($intSemestre); //die;
        $objEntidad = new clCita();
        $arrSemana = $this->cargarCalendCabecera();
        $arrCalendario = $this->cargarCalendario($arrSemana, $intSemestre);
        //var_dump($arrCalendario);//die;
        
        $form   = $this->generarForma($objEntidad);

        return array(
            'objEntidad' => $objEntidad,
            'arrCalendario' => $arrCalendario,
            'arrSemana' => $arrSemana,
            'form'   => $form->createView(),
        );              
    }
    
    private function cargarCalendCabecera(){
        
        //Cargar días de la semana
        // Arreglo de días de la semana
        $arrDias = array(
            "1" => "Lunes",
            "2" => "Martes",
            "3" => "Miércoles",
            "4" => "Jueves",
            "5" => "Viernes",
            "6" => "Sábado",
            "7" => "Domingo");
        
        // Cargar las fechas de la semana en curso comenzando
        // a partir de HOY
        
        $arrSemana = [];
        $i = 1;
        $feDiaHoy = new \DateTime();  
        $intDia = $feDiaHoy->format('N');
        $feIteracion = new \DateTime();        
        for ($i = 1; $i <= 7; $i++) {
            $intDia = $feIteracion->format('N');
            if ($intDia != 6 && $intDia != 7){    
                $arrSemana[$intDia]['dia'] = $arrDias[$intDia];
                $arrSemana[$intDia]['fecha'] = $feIteracion;               
            }
            $intAddDias = 'P'.$i.'D';
            $feIteracion = $feDiaHoy->add(new \DateInterval($intAddDias)); 
            $feDiaHoy = new \DateTime(); 
        }
       return $arrSemana;
    }
    
    private function cargarCalendario($arrSemana, $intSemestre)
    {  
        
        //Generar calendario disponible
        $objOrientador = new clOrientador();
        $hIteracion = new \DateTime('08:00:00');
        $fecha = new \DateTime();
        $hour = '08';
        $minute = '00';
        $second = '00';
        $em = $this->getDoctrine()->getManager();
        
        for ($i = 1; $i <= 10; $i++){
            $arrCalendario[$i]['1']['1'] = $hIteracion->format('h:i a'); 
            $j = 2; // La columna 1 representa la hora
            foreach ($arrSemana as $value) {
                $fecha = $value['fecha'];
                $intDia = $fecha->format('N');
                if ((string)$intDia == '3'){
                    $nbCampo = 'inMiercoles';                  
                }
                else{
                    $nbCampo = 'in'. $value['dia'];                    
                }
                    
                $valCampo = 1; //Si el día a la hora es verdadero, entoces el Docente atiende a esa hora y el día según su agenda
                $objEntidadAgenda = $em->getRepository('DsagacoBundle:clDetallAgendaorientador')->detalleAgendaPorSemestre($intSemestre, $hIteracion, $nbCampo, $valCampo);                
                $k = 1;             
                if ($objEntidadAgenda){
                    $k = 1;
                    foreach ($objEntidadAgenda as $key1 => $value) { 
                        foreach ($value as $idDocente) {
                            //$objOrientador = $em->getRepository('DsagacoBundle:clOrientador')->find($idDocente);
                            $objEntidadHorario = $em->getRepository('DsagacoBundle:clCita')->fechaCitaPorSemana($fecha, $idDocente, $hIteracion);
                            
                            if (!$objEntidadHorario){
                                $objOrientador = $em->getRepository('DsagacoBundle:clOrientador')->find($idDocente);
                                $arrCalendario[$i][$j][$k]['idDocente'] = $idDocente;
                                $arrCalendario[$i][$j][$k]['nbDocente'] = $objOrientador->getCoRecursHumano()->getTxPrimerNombre() . ' ' . $objOrientador->getCoRecursHumano()->getTxPrimerApellido();
                                $arrCalendario[$i][$j][$k]['feCitaProgramada'] = $fecha;
                                $arrCalendario[$i][$j][$k]['hoCitaProgramada'] = $hIteracion;
                                //var_dump($i, $j, $k, $arrCalendario[$i][$j][$k]['nbDocente'], $objOrientador->getCoOrientador());// die;
                                //$objGuardaHorario->setCoOrientador($objOrientador);
                                //$objGuardaHorario->setFeHorario($fecha);                
                                $k = $k + 1;
                            }else{// No hay disponibilidad para ese día y hora del docente $idDocente
                                
                                $arrCalendario[$i][$j][$k] = ' ';                                 
                                $k = $k + 1; 
                            }                         
                        }
                    }
                } else{
                    // No existen agendas personalizadas de ningún docente
                    $arrCalendario[$i][$j][$k] = ' ';
                    //$j = $j + 1;
                    $k = $k + 1;                    
                }
                $j = $j + 1;                
            }
            $hour = $hour + 1;
            $hIteracion->setTime($hour, $minute, $second);
        }        
        //var_dump($fecha, $value['fecha'], $value['dia'],$intDia, $nbCampo, $objEntidadAgenda); //die;
        return $arrCalendario;   
    }
    
    /**
     * Listar todas las activas del día que tiene un docente
     *
     * @Route("/consultar", name="pgCita_consultar")
     * @Method("GET")
     * @Template()
     */
    public function consultarAction(Request $objPeticion)
    {
        $inPersona = '2';
        $em = $this->getDoctrine()->getManager();

        $objEntidad = $em->getRepository('DsagacoBundle:clCita')->findAll();  
        
        //var_dump($objEntidad);  die;
                
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
}
