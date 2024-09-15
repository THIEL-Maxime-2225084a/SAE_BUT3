<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SearchResultController extends AbstractController
{
    #[Route('/search_result', name: 'search_result')]
    public function search_result(): Response
    {
        return $this->render('search_result/index.html.twig', [
            'controller_name' => 'SearchResultController',
        ]);
    }
}
