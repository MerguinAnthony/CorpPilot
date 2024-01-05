<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StaffVacationController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/staff/vacation', name: 'app_staff_vacation')]
    public function index(UserRepository $userRepository, Security $security): Response
    {
        // Récupérer l'utilisateur actuellement authentifié
        $user = $security->getUser();

        // Passer les informations de l'utilisateur à la vue
        return $this->render('pages/staff_vacation/index.html.twig', [
            'controller_name' => 'StaffVacationController',
            'users' => $userRepository->findAll(),
            'currentUser' => $user,
        ]);
    }
}
