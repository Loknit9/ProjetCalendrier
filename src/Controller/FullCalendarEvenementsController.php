<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FullCalendarEvenementsController extends AbstractController
{
    #[Route('/full/calendar/evenements', name: 'app_full_calendar_evenements')]
    public function index(): Response
    {
        return $this->render('full_calendar_evenements/index.html.twig', [
            'controller_name' => 'FullCalendarEvenementsController',
        ]);
    }
}
