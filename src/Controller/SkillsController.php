<?php

namespace App\Controller;

use App\Repository\TechstackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/techstack')]
class SkillsController extends AbstractController
{
    #[Route('/', name: 'app_techstack_index', methods: ['GET'])]
    public function index(TechstackRepository $techstackRepository): JsonResponse
    {
        return $this->json($techstackRepository->findAll());
    }
}
