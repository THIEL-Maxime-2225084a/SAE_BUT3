<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MyCampingDataController extends AbstractController
{
    #[Route('/my_camping_data', name: 'my_camping_data')]
    public function my_camping_data(): Response
    {
        return $this->render('my_camping_data/index.html.twig', [
            'controller_name' => 'MyCampingDataController',
        ]);
    }
}
