<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    #[Route('/contact', methods: ['POST'])]
    public function sendMail(Request $request) : jsonResponse {
        $content = json_decode( $request->getContent() );
        $token = $content->crfToken;

        if($this->isCsrfTokenValid( 'contact-form', $token )) {

            return $this->json('ok');

        } else {

            return $this->json('Unauthorised', 401);

        }

    }
}