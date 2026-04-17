<?php

namespace App\Controller;

use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

 class TaskController extends AbstractController
{
    #[Route('/task', name: 'task_index')]   
    public function index(TaskRepository $repository): Response
    {
        return $this->render('task/index.html.twig', [
            'tasks' => $repository->findAll(),
        ]);
    }
}
