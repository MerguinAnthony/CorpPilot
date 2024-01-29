<?php

namespace App\Controller;

use Knp\Snappy\Pdf;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\CompanyRepository;
use App\Repository\VacationRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\NumberDayOffRepository;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LeaveManagementController extends AbstractController
{
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin/gestion-des-conges', name: 'app_leave_management')]
    public function index(
        UserRepository $userRepository,
        Security $security,
        VacationRepository $vacationRepository,
        CompanyRepository $companyRepository,
    ): Response {
        // Récupérer l'utilisateur actuellement authentifié
        $user = $security->getUser();

        // Passer les informations de l'utilisateur, le formulaire et les demandes de congé à la vue
        return $this->render('pages/leave_management/index.html.twig', [
            'users' => $userRepository->findAll(),
            'currentUser' => $user,
            'leaves' => $vacationRepository->findByUser(),
            'company' => $companyRepository->findOneBy(['id' => $user]),
        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin/gestion-des-conges/validation/{id}', name: 'app_leave_management_validation')]
    public function validation(
        VacationRepository $vacationRepository,
        $id,
        EntityManagerInterface $manager,
        NumberDayOffRepository $numberDayOffRepository
    ): Response {
        // On récupère la demande de congé
        $vacation = $vacationRepository->find($id);

        // On récupère le nombre de jours de congés restants
        $numberDayOff = $numberDayOffRepository->findOneBy(['userDay' => $vacation->getUser()]);

        // Selon le type de congé, on déduit sur le bon compte
        if ($vacation->getAccount() == 1) {
            $numberDayOff->setAvailable($numberDayOff->getAvailable() - $vacation->getNbDays());
        } elseif ($vacation->getAccount() == 2) {
            $numberDayOff->setCet($numberDayOff->getCet() - $vacation->getNbDays());
        } elseif ($vacation->getAccount() == 3) {
            $nbHours = $vacation->getNbHours();

            $hoursAvailable = $numberDayOff->getHoursAvailable() - $nbHours;

            $numberDayOff->setHoursAvailable($hoursAvailable);
        }

        // Valider la demande de congé
        $vacation->setApproved(1);

        // Enregistrer la demande de congé
        $manager->persist($vacation);
        $manager->flush();

        $this->addFlash('success', 'La demande de congé a bien été validée.');

        // Rediriger vers la page de gestion des congés
        return $this->redirectToRoute('app_leave_management');
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin/gestion-des-conges/refus/{id}', name: 'app_leave_management_refus')]
    public function refus(
        VacationRepository $vacationRepository,
        $id,
        EntityManagerInterface $manager
    ): Response {
        // Récupérer la demande de congé
        $vacation = $vacationRepository->find($id);

        // Valider la demande de congé
        $vacation->setApproved(2);

        // Enregistrer la demande de congé
        $manager->persist($vacation);
        $manager->flush();

        $this->addFlash('success', 'La demande de congé a bien été refusée.');

        // Rediriger vers la page de gestion des congés
        return $this->redirectToRoute('app_leave_management');
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin/gestion-des-conges/en-attente/{id}', name: 'app_leave_management_en_attente')]
    public function enAttente(
        VacationRepository $vacationRepository,
        $id,
        EntityManagerInterface $manager
    ): Response {
        // Récupérer la demande de congé
        $vacation = $vacationRepository->find($id);

        // Valider la demande de congé
        $vacation->setApproved(0);

        // Enregistrer la demande de congé
        $manager->persist($vacation);
        $manager->flush();

        $this->addFlash('success', 'La demande de congé a bien été mise en attente.');

        // Rediriger vers la page de gestion des congés
        return $this->redirectToRoute('app_leave_management');
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin/gestion-des-conges/suppression/{id}', name: 'app_leave_management_suppression')]
    public function suppression(
        VacationRepository $vacationRepository,
        $id,
        EntityManagerInterface $manager
    ): Response {
        // Récupérer la demande de congé
        $vacation = $vacationRepository->find($id);

        // Vérifier si la date de fin est antérieure à la date actuelle
        if ($vacation && $vacation->getEndDate() < new \DateTime()) {
            // Supprimer la demande de congé
            $manager->remove($vacation);
            $manager->flush();
        }

        // Rediriger vers la page de gestion des congés
        return $this->redirectToRoute('app_leave_management');
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/user/generate-document/{id}', name: 'app_generate_document')]
    public function generateDocument(
        Pdf $pdfGenerator,
        $id,
        Security $security,
        CompanyRepository $companyRepository,
        VacationRepository $vacationRepository
    ): Response {
        // Récupérer l'utilisateur actuellement authentifié
        $user = $security->getUser();

        // Récupérer logo de l'entreprise
        $logo = $companyRepository->findOneBy(['id' => $user])->getCompanyLogoFile();


        // Récupérez les données nécessaires pour le document à partir de l'utilisateur
        $documentData = [
            'vacation' => $vacationRepository->findOneBy(['id' => $id]),
            'company' => $companyRepository->findOneBy(['id' => $user]),
            'user' => $user,
            'logo' => $logo,
        ];

        // Générer le contenu du document PDF en utilisant un modèle Twig
        $pdfContent = $this->generatePdfContent($pdfGenerator, 'document_template.html.twig', $documentData);

        // Sauvegarder le fichier PDF sur le serveur
        $pdfFilePath = $this->savePdfToFile($pdfContent, 'Demande_de_congé.pdf');

        // Envoyer le fichier PDF en réponse
        return $this->sendPdfResponse($pdfFilePath);

        // Rediriger vers la page de gestion des congés
        return $this->redirectToRoute('app_leave_management');
    }

    private function generatePdfContent(Pdf $pdfGenerator, string $template, array $data): string
    {
        // Rendre le template Twig avec les données fournies
        $htmlContent = $this->renderView($template, $data);

        // Utiliser le service Knp\Snappy\Pdf pour générer le PDF à partir du HTML
        return $pdfGenerator->getOutputFromHtml($htmlContent);
    }

    private function savePdfToFile(string $pdfContent, string $filename): string
    {
        // Spécifier le répertoire où vous souhaitez sauvegarder les fichiers PDF
        $pdfDirectory = $this->getParameter('kernel.project_dir') . '/public/pdf/';

        // Concaténer le répertoire avec le nom du fichier
        $pdfFilePath = $pdfDirectory . $filename;

        // Assurez-vous que le répertoire existe
        if (!file_exists($pdfDirectory)) {
            mkdir($pdfDirectory, 0755, true);
        }

        // Sauvegarder le contenu du PDF dans un fichier
        file_put_contents($pdfFilePath, $pdfContent);

        return $pdfFilePath;
    }


    private function sendPdfResponse(string $pdfFilePath): Response
    {
        // Créer une réponse avec le fichier PDF
        $response = new Response(file_get_contents($pdfFilePath));

        // Spécifier le type de contenu
        $response->headers->set('Content-Type', 'application/pdf');

        // Spécifier le nom du fichier lors du téléchargement
        $response->headers->set('Content-Disposition', 'attachment; filename="generated_document.pdf"');

        return $response;
    }
}
