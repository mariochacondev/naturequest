<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\FinalSheetPlant;
use App\Entity\CoursePlant;
use App\Entity\ButtonPlant;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

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
    public function coursePlantShow(int $id): Response
    {
        $courseplant = $this->getDoctrine()
            ->getRepository(CoursePlant::class)
            ->find($id);

        if (!$courseplant) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
            JsonEncoder()));
            $json = $serializer->serialize($courseplant, 'json', [
            'circular_reference_handler' => function ($json) {
            return $json->getId();
    }
]);
            $response = new Response($json);
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        
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
