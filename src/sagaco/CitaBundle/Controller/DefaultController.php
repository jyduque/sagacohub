<?php

namespace sagaco\CitaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function citaAction()
    {
        return $this->render('CitaBundle:Default:cita.html.twig');
    }
}
