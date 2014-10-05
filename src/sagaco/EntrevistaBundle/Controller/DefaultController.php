<?php

namespace sagaco\EntrevistaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EntrevistaBundle:Default:index.html.twig', array('name' => $name));
    }
}
