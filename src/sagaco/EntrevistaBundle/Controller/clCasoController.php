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
use sagaco\DsagacoBundle\Entity\clCaso;

/**
 * Controlador de clHistorPersona.
 *
 * @Route("/pgCaso")
 */
class clCasoController extends Controller {
    var $blnBandera;
    
    /**
     * Lists todas las entidades de clCita.
     *
     * @Route("/", name="pgCaso")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $objPeticion)
    {
        return $this->redirect($this->generateUrl('pgHistorPersona_registrar'));
    } 
}
