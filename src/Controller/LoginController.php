<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index( AuthenticationUtils $utilis ): Response
    {
        $error = $utilis->getLastAuthenticationError();
        $username = $utilis->getLastUsername();

        return $this->render('login/index.html.twig', [
            'username' => $username,
            'error' => $error
        ]);
    }
}
