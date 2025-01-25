<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TripsController extends AbstractController
{
    #[Route('/trips', name: 'app_trips')]
    public function index(): Response
    {
        $trips = ["Turkey", "Finland", "England", "Latvia"];

        return $this->render('index.html.twig', array(
            'trips' => $trips
        ));
    }
}
