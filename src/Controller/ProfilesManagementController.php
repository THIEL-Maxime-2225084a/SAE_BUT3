<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfilesManagementController extends AbstractController
{
    #[Route('/profiles_management', name: 'profiles_management')]
    public function profiles_management(): Response
    {
        return $this->render('profiles_management/index.html.twig', [
            'controller_name' => 'ProfilesManagementController',
        ]);
    }
}
