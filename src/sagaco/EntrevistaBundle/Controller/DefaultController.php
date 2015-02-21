<?php

namespace sagaco\EntrevistaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function entrevistaAction()
    {
        return $this->render('EntrevistaBundle:Default:entrevista.html.twig');
    }
}
