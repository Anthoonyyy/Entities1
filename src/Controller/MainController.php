<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'title' => 'homepage',
            'homepage_text' => "Nous sommes le ".date('d/m/Y \à H:i')
        ]);
    }

    #[Route('/about', name: 'about_me')]
    public function aboutMe(): Response
    {
        return $this->render('main/about.html.twig', [
            'title' => 'About me',
            'homepage_text' => "Lorem ipsum dolor lorem lorem"
        ]);
    }
}
