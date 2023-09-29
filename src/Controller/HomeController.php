<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {   
        //si il y a un user connecté on envoie à la page d'acceuil
        if ($this->getUser()){
            return $this->render('home/index.html.twig');
        }
        else {
            return $this->redirectToRoute("app_login");       
        
        }
    
    }
}
