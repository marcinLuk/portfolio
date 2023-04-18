<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    #[Route('/contact', methods: ['POST'])]
    public function sendMail(Request $request, MailerInterface $mailer): jsonResponse
    {
        $content = json_decode($request->getContent());
        $token = $content->crfToken;

        if ($this->isCsrfTokenValid('contact-form', $token)) {
            $status = 200;
            $returnMessage = '';
            $emailMessage =
                empty($content->name) ?
                    "From: {$content->name} <br> {$content->message}" :
                    $content->message;
            $subject =
                empty($content->subject) ?
                    'No Subject' :
                    $content->subject;

            $email = new Email();
            $email
                ->from($content->email)
                ->to('contact@marcinlukaszek.pl')
                ->subject($subject)
                ->html($emailMessage);
            try {
                $mailer->send($email);
            } catch (TransportExceptionInterface $e) {
                $status = 500;
                $returnMessage = "Error: {$e->getMessage()}";
            }
            return $this->json($returnMessage, $status);
        } else {
            return $this->json('Unauthorised', 401);
        }
    }
}