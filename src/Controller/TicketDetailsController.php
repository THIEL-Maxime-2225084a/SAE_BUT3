<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TicketDetailsController extends AbstractController
{
    #[Route('/ticket_details', name: 'ticket_details')]
    public function tickets_details(): Response
    {
        return $this->render('ticket_details/index.html.twig', [
            'controller_name' => 'TicketDetailsController',
        ]);
    }
}
