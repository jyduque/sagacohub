<?php

namespace sagaco\DsagacoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DsagacoBundle:Default:index.html.twig', array('name' => $name));
    }
}
