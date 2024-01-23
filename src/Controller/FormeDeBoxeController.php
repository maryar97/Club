<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormeDeBoxeController extends AbstractController
{
    #[Route('/forme/de/boxe', name: 'app_forme_de_boxe')]
    public function index(): Response
    {
        return $this->render('forme_de_boxe/index.html.twig', [
            'controller_name' => 'FormeDeBoxeController',
        ]);
    }
}
