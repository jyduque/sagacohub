<?php

namespace sagaco\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function infoAction($pagina)
    {
        return $this->render('InfoBundle:Default:'.$pagina.'.html.twig');
    }
}
