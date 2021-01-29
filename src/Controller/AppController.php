<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\FinalSheet;
use App\Entity\CoursePlant;
use App\Entity\ButtonPlant;
use App\Entity\Geolocalisation;
use App\Entity\ButtonAnimal;
use App\Entity\CourseAnimal;
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

    
    #[Route("/parcoursplant/{id}", name: "start_course_plant")]
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

    #[Route("/fiche/{id}", name: "finalsheet")]
    public function finalSheetShow(int $id): Response
    {
        $finalsheet = $this->getDoctrine()
            ->getRepository(FinalSheet::class)
            ->find($id);

        if (!$finalsheet) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
            JsonEncoder()));
            $json = $serializer->serialize($finalsheet, 'json', [
            'circular_reference_handler' => function ($json) {
            return $json->getId();
    }
]);
            $response = new Response($json);
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        
    }

    #[Route("/parcoursanimal/{id}", name: "start_course_animal")]
    public function courseAnimalShow(int $id): Response
    {
        $courseanimal = $this->getDoctrine()
            ->getRepository(CourseAnimal::class)
            ->find($id);

        if (!$courseanimal) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
            JsonEncoder()));
            $json = $serializer->serialize($courseanimal, 'json', [
            'circular_reference_handler' => function ($json) {
            return $json->getId();
    }
]);
            $response = new Response($json);
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        
    }

    #[Route("/geolocalisation/{id}", name: "start_course_gps")]
    public function courseGps(int $id): Response
    {
        $coursegps = $this->getDoctrine()
            ->getRepository(Geolocalisation::class)
            ->find($id);

        if (!$coursegps) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
            JsonEncoder()));
            $json = $serializer->serialize($coursegps, 'json', [
            'circular_reference_handler' => function ($json) {
            return $json->getId();
    }
]);
            $response = new Response($json);
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        
    }

}
