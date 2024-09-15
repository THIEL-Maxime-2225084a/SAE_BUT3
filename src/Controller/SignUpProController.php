<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SignUpProController extends AbstractController
{
    #[Route('/sign_up_pro', name: 'sign_up_pro')]
    public function sign_up_pro(Request $request): Response
    {
        $session = $request->getSession();
        $partNumber = $request->request->get('partNumber', 0);

        if ($request->isMethod('POST')) {
            $partNumber++;
            $session->set('partNumber', $partNumber);
        }

        return $this->render('sign_up_pro/index.html.twig', [
            'controller_name' => 'SignUpProController',
            'partNumber' => $partNumber,
        ]);
    }
}
