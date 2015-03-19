<?php

namespace sagaco\CitaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use sagaco\DsagacoBundle\Entity\clHorariCita;
use sagaco\CitaBundle\Form\Frontend\clHorariCitaType;

/**
 * Controlador de clHorariCita.
 *
 * @Route("/pgHorariCita")
 */
class clHorariCitaController extends Controller
{
    var $blnBandera;
    
    /**
     * Lists todas las entidades de clHorariCita.
     *
     * @Route("/", name="pgHorariCita")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $objPeticion)
    {
        //Traer la consulta de tp_horari_cita. Se identifican que días de 
        //semana NO está disponible
        
        $feInicio = new \DateTime(); //Inicio de semana (HOY)
        $feFin = new \DateTime();    // Fin de semana    
        $feFin = $feFin->add(new \DateInterval('P7D')); 
        $intSemestre = 1; //Semestre 
        
        $em = $this->getDoctrine()->getManager();
        $objEntidadHorario = $em->getRepository('DsagacoBundle:clHorariCita')->fechaCitaPorSemana($feInicio, $feFin);
        $objEntidadAgenda = $em->getRepository('DsagacoBundle:clDetallAgendaorientador')->detalleAgendaPorSemestre($intSemestre);
        
        // Arreglo de días de la semana
        $arrDias = array(
            "1" => "Lunes",
            "2" => "Martes",
            "3" => "Miércoles",
            "4" => "Jueves",
            "5" => "Viernes",
            "6" => "Sábado",
            "7" => "Domingo");
        
        // Cargar las fechas de la semana a partir de l día HOY hasta siete días después
        
        $arrSemana = [];
        $i = 1;
        $feDiaHoy = new \DateTime();  
        $intDia = $feDiaHoy->format('N');
        $feIteracion = new \DateTime();        
        for ($i = 1; $i <= 7; $i++) {
            $intDia = $feIteracion->format('N');
            if ($intDia != 6 && $intDia != 7){               
                $arrSemana[$intDia] = $feIteracion->format('d-m-Y');                              
            }
            $intAddDias = 'P'.$i.'D';
            $feIteracion = $feDiaHoy->add(new \DateInterval($intAddDias)); 
            $feDiaHoy = new \DateTime(); 
        }
        
        //Generar calendario disponible
        $arrCalendario = [];
        $hInicio = new \DateTime('08:00:00'); //Inicio de hora (8:00:00)
        $hIteracion = new \DateTime('08:00:00');
        $hour = '08';
        $minute = '00';
        $second = '00';
        
        for ($i = 1; $i <= 10; $i++){
            $arrCalendario[$i]['1']['1'] = $hIteracion->format('h:i a');
            $hour = $hour + 1;
            $hIteracion->setTime($hour, $minute, $second);
            for($j = 2; $j <= 3; $j++){
                /*foreach ($array as &$valor) {
                    $valor = $valor * 2;
                }*/
                // Aquí se va hacer la lógica para tomar un orientador buscar su horario y ver si tiene disponibilidad acorde a la fecha.
                // 
                //Se puede hacer un is not in revisar la documentación
                $arrCalendario[$i][$j]['1'] = 'Prueba';
                $arrCalendario[$i][$j]['2'] = 'Prueba1';
                        
            }
        } 
        
       /* $arrCalendario['1']['1']['1'] = 'Jhan';
        $arrCalendario['1']['1']['2'] = 'Jorge';
        $arrCalendario['1']['2']['1'] = 'Prueba';
        $arrCalendario['1']['2']['2'] = '';
        $arrCalendario['1']['3']['1'] = '';*/
        
        
        
        //var_dump($arrCalendario);  
        //die;

        return ['arrDias' => $arrDias,
            'objPagina' => $arrSemana,
            'arrCalendario' => $arrCalendario
                ];
    } 
    
    public function copoiAction(Request $objPeticion)
    {
        $em = $this->getDoctrine()->getManager();

        $objEntidad = $em->getRepository('DsagacoBundle:clHorariCita')->listar();        
                
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
     * Crea una entidad tipo clHorariCita nueva.
     *
     * @Route("/", name="pgHorariCita_crear")
     * @Method("POST")
     * @Template("CitaBundle:clHorariCita:registrar.html.twig")
     */
    public function crearAction(Request $objPeticion)
    {
        $objEntidad = new clHorariCita();
        $form = $this->generarForma($objEntidad);
        $form->handleRequest($objPeticion);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $objEntidad->setFhCreacion(new \DateTime());
            $objEntidad->setFhActualizacion(new \DateTime());
            $em->persist($objEntidad);
            $em->flush();
            $blnBandera = 1;

            return $this->redirect($this->generateUrl('pgHorariCita_mostrar', array('id' => $objEntidad->getCoHorariCita(), 'blnBandera' => $blnBandera)));
        }

        return array(
            'objEntidad' => $objEntidad,
            'form'   => $form->createView(),
        );
        
    }

    /**
     * Genera una forma para crear una entidad de tipo clGrupoRol.
     *
     * @param clHorariCita $objEntidad La entidad
     *
     * @return \Symfony\Component\Form\Form La forma
     */
    private function generarForma(clHorariCita $objEntidad)
    {
        $form = $this->createForm(new clHorariCitaType(), $objEntidad, array(
            'action' => $this->generateUrl('pgHorariCita_crear'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;        
    }

    /**
     * Desplega un forma para crear una nueva entidad tipo clGrupoRol.
     *
     * @Route("/registrar", name="pgHorariCita_registrar")
     * @Method("GET")
     * @Template()
     */
    public function registrarAction()
    {
        $objEntidad = new clHorariCita();
        $form   = $this->generarForma($objEntidad);

        return array(
            'objEntidad' => $objEntidad,
            'form'   => $form->createView(),
        );              
    }

    /**
     * Muestra una entidad específica de tipo clHorariCita.
     *
     * @Route("/{id},{blnBandera}", name="pgHorariCita_mostrar")
     * @Method("GET")
     * @Template()
     */
    public function mostrarAction($id, $blnBandera)
    {
        $em = $this->getDoctrine()->getManager();

        $objEntidad = $em->getRepository('DsagacoBundle:clHorariCita')->find($id);

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
     * Desplega la forma para actualizar una entidad de clHorariCita existente.
     *
     * @Route("/{id}/editar", name="pgHorariCita_editar")
     * @Method("GET")
     * @Template()
     */
    public function editarAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $objEntidad = $em->getRepository('DsagacoBundle:clHorariCita')->find($id);

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
    * Crea una forma para actualizar una entidad de clHorariCita.
    *
    * @param clHorariCita $objEntidad La entidad
    *
    * @return \Symfony\Component\Form\Form La forma
    */
    private function editarForma(clHorariCita $objEntidad)
    {
        $form = $this->createForm(new clHorariCitaType(), $objEntidad, array(
            'action' => $this->generateUrl('pgHorariCita_actualizar', array('id' => $objEntidad->getCoHorariCita())),
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
     * Edita una entidad de clHorariCita existente.
     *
     * @Route("/{id}", name="pgHorariCita_actualizar")
     * @Method("PUT")
     * @Template("CitaBundle:clHorariCita:editar.html.twig")
     */
    public function actualizarAction(Request $objPeticion, $id)
    {
        $em = $this->getDoctrine()->getManager();
        

        $objEntidad = $em->getRepository('DsagacoBundle:clHorariCita')->find($id);

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
            return $this->redirect($this->generateUrl('pgHorariCita_mostrar', array('id' => $id, 'blnBandera' => $blnBandera)));
        }

        return array(
            'objEntidad'      => $objEntidad,
            'edit_form'   => $objEditarForma->createView(),
            'delete_form' => $objEliminForma->createView(),
        );        
    }
    
    /**
     * Elimina una entidadde clHorariCita.
     *
     * @Route("/{id}", name="pgHorariCita_eliminar")
     * @Method("DELETE")
     */
    public function eliminarAction(Request $objPeticion, $id)
    {
        $form = $this->eliminarForma($id);
        $form->handleRequest($objPeticion);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $objPeticion = $em->getRepository('DsagacoBundle:clHorariCita')->find($id);

            if (!$objPeticion) {
                throw $this->createNotFoundException('Imposible encontrar el área.');
            }

            $em->remove($objPeticion);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pgHorariCita'));        
    }

    /**
     * Crea una forma para eliminar una entidad por el id de clHorariCita.
     *
     * @param mixed $id id de la Entidad
     *
     * @return \Symfony\Component\Form\Form La Forma
     */
    private function eliminarForma($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pgHorariCita_eliminar', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('boton', 'submit', ['label' => ' ', 'button_class' => 'btn btn-xs glyphicon glyphicon-trash', 'attr' => ['data-toggle' => 'tooltip',
                'data-placement' => 'bottom',
                'title' => '',
                'data-original-title' => 'Eliminar']])
            ->getForm()
        ;        
    }
    
}
