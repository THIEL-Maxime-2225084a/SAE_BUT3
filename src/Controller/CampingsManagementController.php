<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CampingsManagementController extends AbstractController
{
    #[Route('/campings_management', name: 'campings_management')]
    public function campings_management(): Response
    {
        return $this->render('campings_management/index.html.twig', [
            'controller_name' => 'CampingsManagementController',
        ]);
    }
}
