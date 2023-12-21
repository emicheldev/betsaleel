<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index():Response
    {
        return $this->render('pages/home.html.twig', ['title' => 'Test Page']);
    }
    
    #[Route('/about', name: 'about')]
    public function about():Response
    {
        return $this->render('pages/about.html.twig', ['title' => 'Test Page']);
    }

    #[Route('/contact', name: 'contact')]
    public function contact():Response
    {
        return $this->render('pages/contact.html.twig', ['title' => 'Test Page']);
    }

    #[Route('/donate', name: 'donate')]
    public function donate():Response
    {
        return $this->render('pages/donate.html.twig', ['title' => 'Donate']);
    }

    #[Route('/faq', name: 'faq')]
    public function faq():Response
    {
        return $this->render('pages/faq.html.twig', ['title' => 'faq']);
    }
}
