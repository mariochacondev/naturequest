<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Plant;
use App\Entity\RoutePlant;
use App\Repository\RoutePlantRepository;
use App\Repository\PlantRepository;

class NatureController extends AbstractController
{
    /**
     * @Route("/nature", name="nature_list")
     */
    public function natureList(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Plant::class);
        $plants = $repository->findBy([], ["id" => "DESC"]);

        $plant = new Plant();
        return $this->render('nature/index.html.twig', [
            'plants' => $plants
        ]);
    }
    /**
     * @Route("/nature/parcours/", name="nature_route")
     */
    public function natureRoute(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Plant::class);
        $plants = $repository->findBy([], ['name' => 'ASC']);   

        return $this->render('nature/natureRoute.html.twig', [
            'plants' => $plants,  
        ]);
    }
}
