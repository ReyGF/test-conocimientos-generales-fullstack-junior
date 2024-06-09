<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NameController extends AbstractController
{
    #[Route('/hello/{name}', name: 'hello')]
    public function index($name = 'World'): Response
    {
        //return new Response('Hello ' . $name . '!');

        return $this->render('/name/index.html.twig', [
            'controller_name' => $name
        ]);
    }
}
