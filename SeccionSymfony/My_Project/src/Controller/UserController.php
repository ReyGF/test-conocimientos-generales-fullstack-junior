<?php

namespace App\Controller;

use App\Form\UserFormType;
use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __constructor(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/user', name: 'app_user')]
    public function index(Request $request): Response
    {

        $user = new User();
        $form = $this->createForm(UserFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($user);
            $this->em->flush();
        }

        return $this->render('user/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
