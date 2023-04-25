<?php

namespace App\Controller\Admin;

use App\Controller\ProjectController;
use App\Entity\Admin;
use App\Entity\Experience;
use App\Entity\Project;
use App\Entity\Skills;
use App\Entity\Techstack;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
         return $this->render('@EasyAdmin/page/content.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Portfolio');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Admin', 'fa fa-tags', Admin::class);
        yield MenuItem::linkToCrud('Portfolio', 'fa fa-tags', Project::class);
        yield MenuItem::linkToCrud('Experience', 'fa fa-tags', Experience::class);
        yield MenuItem::linkToCrud('Skills', 'fa fa-tags', Skills::class);
        yield MenuItem::linkToCrud('Tech stack', 'fa fa-tags', Techstack::class);
    }

    public function configureUserMenu(UserInterface $user): UserMenu
    {
        return parent::configureUserMenu($user);
    }
}
