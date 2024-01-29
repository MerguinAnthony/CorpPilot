<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LegalController extends AbstractController
{
  #[Route('/CGU.pdf', name: 'cgu_pdf')]
  public function serveCguPdf(): Response
  {
    // Chemin absolu vers le fichier PDF
    $pdfPath = $this->getParameter('kernel.project_dir') . '/CGU.pdf';

    // Renvoie le fichier PDF comme réponse
    return $this->file($pdfPath);
  }
}
