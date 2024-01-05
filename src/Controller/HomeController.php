<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('pages/home.html.twig', [
            'companyCreat' => $this->getParameter('company_creat'),
            'companyName' => $this->getParameter('company_name'),
            'companyCity' => $this->getParameter('company_city'),
            'companyAbrev' => $this->getParameter('company_abrev'),
            'companyAddress' => $this->getParameter('company_address'),
            'companyPhone' => $this->getParameter('company_phone'),
            'companyEmail' => $this->getParameter('company_email'),
        ]);
    }
}
