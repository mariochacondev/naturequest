<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use App\Entity\FinalSheet;
use App\Entity\CoursePlant;
use App\Entity\ButtonPlant;
use App\Entity\CourseAnimal;
use App\Entity\ButtonAnimal;
use App\Entity\Geolocalisation;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;

class AdminController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        
        return $this->render('app/index_admin.html.twig');
    }

    public function configureAssets(): Assets
    {
        return Assets::new()->addCssFile('css/admin.css');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<div style="display:flex; align-items:baseline"><img style="width:100px; border-radius:7px" src=".\img\logo-naturschool.png"><h1 style="margin:10px; color:white">NaturQuest de NaturSchool</h1></div>');
    }

    public function configureMenuItems(): iterable
    {
        return [
        MenuItem::subMenu('Plant','fas fa-seedling')->setSubItems([
            MenuItem::linkToCrud('Etape pour les plantes', 'fab fa-discourse', CoursePlant::class),
            MenuItem::linkToCrud('Bouton pour les plantes', 'fa fa-tags', ButtonPlant::class),
            ]),
        
        MenuItem::subMenu('Animaux','fas fa-paw')->setSubItems([
            MenuItem::linkToCrud('Etape pour les animaux','fab fa-discourse', CourseAnimal::class),
            MenuItem::linkToCrud('Boutons pour les aniamux','fa fa-tags', ButtonAnimal::class),
            ]),
            MenuItem::linkToCrud('Fiche Final','fas fa-info-circle', FinalSheet::class),
            MenuItem::linkToCrud('Geolocalisation', 'fas fa-map-marker-alt', Geolocalisation::class),
            MenuItem::linkToLogout('Deconnexion', 'fa fa-sign-out'),
        ];
        
    }
}
