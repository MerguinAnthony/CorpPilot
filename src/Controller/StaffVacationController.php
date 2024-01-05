<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaffVacationController extends AbstractController
{
    #[Route('/staff/vacation', name: 'app_staff_vacation')]
    public function index(): Response
    {
        return $this->render('pages/staff_vacation/index.html.twig', [
            'controller_name' => 'StaffVacationController',
        ]);
    }
}
