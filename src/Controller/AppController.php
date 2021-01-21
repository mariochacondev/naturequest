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

    
    #[Route("/parcours/{id}", name: "start_course")]
    public function courseShow(int $id): Response
    {
        $plantcourse = $this->getDoctrine()
            ->getRepository(PlantCourse::class)
            ->find($id);

        if (!$plantcourse) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
        return $this->render('app/course.html.twig', ['plantcourse' => $plantcourse]);
    }

    
     
    /*  #[Route("/parcours", name: "start_course")]
    public function courseShow(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(PlantCourse::class);
        $plantcourses = $repository->findBy([], ['plant' => 'ASC']);
        
    
        return $this->render('app/course.html.twig', [
            'plantcourses' => $plantcourses
        ]);
    } */

}
