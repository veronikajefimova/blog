<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class TripsController extends AbstractController
{
    #[Route('/trips/{name}', name: 'app_trips', defaults: ['name' => null], methods:['GET', 'HEAD'])]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TripsController.php',
        ]);
    }
}
