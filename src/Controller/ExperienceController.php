<?php

namespace App\Controller;

use App\Repository\ExperienceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/experience')]
class ExperienceController extends AbstractController
{
    #[Route('/', name: 'app_experience_index', methods: ['GET'])]
    public function index(ExperienceRepository $experienceRepository): JsonResponse
    {
        return $this->json($experienceRepository->findAll());
    }

}
