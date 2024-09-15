<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LoginProController extends AbstractController
{
    #[Route('/login_pro', name: 'login_pro')]
    public function login_pro(): Response
    {
        return $this->render('login_pro/index.html.twig', [
            'controller_name' => 'LoginProController',
        ]);
    }
}
