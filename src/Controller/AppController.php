<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Plant;
use App\Entity\PlantCourse;

class AppController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('app/index.html.twig', [
            'controller_name' => 'NatureQuest',
        ]);
    }

    // #[Route('/parcours', name: 'start_course')]
    // public function start(): Response
    // {
    //     return $this->render('app/start.html.twig', [
    //         'controller_name' => 'Bienvenue',
    //     ]);
    // }

     
     #[Route("/parcours", name: "start_course")]
    public function courseShow(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(PlantCourse::class);
        $plantcourses = $repository->findBy([], ['id' => 'ASC'],3);
    
        return $this->render('app/start.html.twig', [
            'plantcourses' => $plantcourses
        ]);
    }

}
