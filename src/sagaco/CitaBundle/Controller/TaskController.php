<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace sagaco\CitaBundle\Controller;

use sagaco\DsagacoBundle\Entity\Task;
use sagaco\DsagacoBundle\Entity\Tag;
use sagaco\CitaBundle\Form\Extranet\TaskType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Controlador de TaskController.
 *
 * @Route("/pgTask")
 */
class TaskController extends Controller {
    
    /**
     * Lists todas las entidades de clGrupoRol.
     *
     * @Route("/", name="pgTask")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $objPeticion)
    {
       $task = new Task();

        // código ficticio - esto está aquí sólo para que la tarea tenga algunas
        // etiquetas, de lo contrario, este no sería un ejemplo interesante
        $tag1 = new Tag();
        $tag1->name = 'tag1';
        $task->getTags()->add($tag1);
        $tag2 = new Tag();
        $tag2->name = 'tag2';
        $task->getTags()->add($tag2);
        // termina el código maniquí                     
  

        return ['objEntidad' => $task];
    }
    
    /**
     * Crea una entidad tipo clCita nueva.
     *
     * @Route("/new", name="pgTask_new")     
     * @Method("GET")
     * @Template()
     */    
    public function newAction(Request $request)
    {
        $task = new Task();

        // código ficticio - esto está aquí sólo para que la tarea tenga algunas
        // etiquetas, de lo contrario, este no sería un ejemplo interesante
        $tag1 = new Tag();
        $tag1->name = 'tag1';
        $task->getTags()->add($tag1);
        $tag2 = new Tag();
        $tag2->name = 'tag2';
        $task->getTags()->add($tag2);
        // termina el código maniquí
var_dump($task);
        $form = $this->createForm(new TaskType(), $task);

        // procesa el formulario en POST
        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                var_dump($task);
                // posiblemente hagas algún procesamiento del formulario,
                // tal como guardar los objetos Task y Tag
            }
        }

        return $this->render('CitaBundle:Task:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
