<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


#[Route('apioracle', name: 'apioracle_')]
class APIOracleController extends AbstractController
{
    #[Route('/apioracle', name: 'apioracle')]
    public function index(): Response
    {
        return $this->render('api_oracle/index.html.twig', [
            'controller_name' => 'APIOracleController',
        ]);
    }
}
