<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CampingDetailsController extends AbstractController
{
    #[Route('/camping_details', name: 'camping_details')]
    public function camping_details(): Response
    {
        return $this->render('camping_details/index.html.twig', [
            'controller_name' => 'CampingDetailsController',
        ]);
    }
}
