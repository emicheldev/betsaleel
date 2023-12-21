<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetsController extends AbstractController
{
    #[Route('/projets', name: 'projets')]
    public function index(): Response
    {
        return $this->render('Projets/index.html.twig');
    }
}
