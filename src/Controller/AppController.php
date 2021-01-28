<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
Use App\Entity\ParcoursPlant;
Use App\Entity\ButtonPlant;
Use App\Entity\FinalSheet;
use App\Repository\ParcoursPlantRepository;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class AppController extends AbstractController
{
    /**
     * @Route("parcours/{id}", name="start_course")
     */
    public function parcoursPlant(int $id): Response
    {
        $parcoursplant = $this->getDoctrine()
            ->getRepository(ParcoursPlant::class)
            ->find($id);

        if (!$parcoursplant) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
            JsonEncoder()));
            $json = $serializer->serialize($parcoursplant, 'json', [
                'circular_reference_handler' => function ($json) {
                return $json->getId();
                }
            ]);
            $response = new Response($json);
            $response->headers->set('Content-Type', 'application/json');

            return $response;

    }

    /**
     * @Route("fiche/{id}", name="fiche")
     */
    public function fichePlant(int $id): Response
    {
        $ficheplant = $this->getDoctrine()
            ->getRepository(FinalSheet::class)
            ->find($id);

        if (!$ficheplant) {
            throw $this->createNotFoundException(
                'No product found for id  '.$id
            );
        }
            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
            JsonEncoder()));
            $json = $serializer->serialize($ficheplant, 'json', [
                'circular_reference_handler' => function ($json) {
                return $json->getId();
                }
            ]);
            $response = new Response($json);
            $response->headers->set('Content-Type', 'application/json');

            return $response;

    }
}
