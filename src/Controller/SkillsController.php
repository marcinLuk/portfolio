<?php

namespace App\Controller;

use App\Entity\Skills;
use App\Form\SkillsType;
use App\Repository\SkillsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/skills')]
class SkillsController extends AbstractController
{
    #[Route('/', name: 'app_skills_index', methods: ['GET'])]
    public function index(SkillsRepository $skillsRepository): JsonResponse
    {
        return $this->json($skillsRepository->findAll());
    }
}
