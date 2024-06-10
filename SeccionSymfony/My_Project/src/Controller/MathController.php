<?php

namespace App\Controller;


use App\Service\MathService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MathController extends AbstractController
{
    private MathService $mathService;

    public function __construct(MathService $mathService)
    {
        $this->mathService = $mathService;
    }

    #[Route('/math/sum/{a}/{b}', name: 'math_sum')]
    public function sum($a, $b): Response
    {
        $sum = $this->mathService->sum($a, $b);

        //return new Response("");

        return $this->render('/math/index.html.twig', [
            'controller_name' => "La suma de $a y $b es $sum."
        ]);
    }
}
