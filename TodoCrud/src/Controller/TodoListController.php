<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TodoListController extends AbstractController
{
    /**
     * @Route("/todo/list", name="todo_list")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }
}
