<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostsController extends AbstractController
{
    #[Route('/posts', name: 'posts')]
    public function index(): Response
    {
        return $this->render('posts/index.html.twig', [
            'controller_name' => 'PostsController',
        ]);
    }

    #[Route('/show', name: 'show')]
    public function show(): Response
    {
        return $this->render('posts/show.html.twig');
    }
}
