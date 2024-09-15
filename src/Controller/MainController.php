<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig');
    }

    #[Route('/login_pro', name: 'login_pro')]
    public function login_pro(): Response
    {
        return $this->render('login_pro/index.html.twig');
    }

    #[Route('/services', name: 'sign_up_pro')]
    public function sign_up_pro(): Response
    {
        return $this->render('sign_up_pro/index.html.twig');
    }
}
