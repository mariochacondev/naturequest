<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use App\Entity\FinalSheet;
use App\Entity\CoursePlan;
use App\Entity\ButtonPlant;
use App\Entity\CourseAnimal;
use App\Entity\ButtonAnimal;
use App\Entity\Geolocalisation;

class AdminController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(CoursePlantCrudController::class)->generateUrl());
        // return parent::index();
    }
    

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Naturequest');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Chemin/Page Plant', 'fa fa-list');
        yield MenuItem::linkToCrud('Chemin/Page Animal', 'fas fa-list', CourseAnimal::class);
        yield MenuItem::linkToCrud('Bouton pour les Plantes', 'fas fa-list', ButtonPlant::class);
        yield MenuItem::linkToCrud('Bouton pour les Animaux', 'fas fa-list', ButtonAnimal::class);
        yield MenuItem::linkToCrud('Fiche Final Animale/Plante', 'fas fa-list', FinalSheet::class);
        yield MenuItem::linkToCrud('NatureQuest GPS', 'fas fa-list', Geolocalisation::class);
        
    }
}
