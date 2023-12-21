<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Article;
use App\Entity\Event;
use App\Entity\Partner;
use App\Entity\Projets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');

       
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Besaleel');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('User', 'fas fa-users', User::class);
        yield MenuItem::linkToCrud('Article', 'fas fa-folder', Article::class);
        yield MenuItem::linkToCrud('Partner', 'fa-solid fa-handshake-simple', Partner::class);
        yield MenuItem::linkToCrud('Projets', 'fa-solid fa-list-check', Projets::class);
        yield MenuItem::linkToCrud('Event', 'fa-regular fa-calendar-days', Event::class);

    }
}
