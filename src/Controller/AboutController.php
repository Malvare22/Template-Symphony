<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

final class AboutController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
public function index(): Response
{
    return $this->render('about/about.html.twig');
}
}
