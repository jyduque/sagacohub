<?php

namespace sagaco\PruebaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Controlador de InstruDVI.
 *
 * @Route("/pgInstruDVI")
 */
class InstruDVIController extends Controller
{
    /**
     * @Route("/", name="pgInstruDVI")
     * @Method("GET")
     * @Template()
     */
    public function instruDVIAction()
    {
        return $this->render('PruebaBundle:InstruDVI:instruDVI.html.twig');
    }
}
    
    
