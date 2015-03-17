<?php

namespace sagaco\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function pruebaAction()
    {
        return $this->render('PruebaBundle:Default:prueba.html.twig');
    }
    
    public function instruDVIAction()
    {
        return $this->render('PruebaBundle:Default:instruDVI.html.twig');
    }
}
