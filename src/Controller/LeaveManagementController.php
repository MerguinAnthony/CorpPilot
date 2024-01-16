<?php

namespace App\Controller;

use Faker\Core\Number;
use App\Repository\UserRepository;
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
    ): Response {
        // Récupérer l'utilisateur actuellement authentifié
        $user = $security->getUser();


        // Passer les informations de l'utilisateur, le formulaire et les demandes de congé à la vue
        return $this->render('pages/leave_management/index.html.twig', [
            'users' => $userRepository->findAll(),
            'currentUser' => $user,
            'companyAbrev' => $this->getParameter('company_abrev'),
            'leaves' => $vacationRepository->findByUser(),
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
        // Récupérer la demande de congé
        $vacation = $vacationRepository->find($id);

        // Valider la demande de congé
        $vacation->setApproved(1);

        // Fonction pour calculer le nombre de jours ouvrables entre deux dates
        function getWorkingDaysBetweenDates($startDate, $endDate)
        {
            $workingDays = 0;

            $currentDate = clone $startDate;

            while ($currentDate <= $endDate) {
                // Exclure les samedis, dimanches et jours fériés
                if ($currentDate->format('N') < 6 && !isHoliday($currentDate)) {
                    $workingDays++;
                }

                $currentDate->modify('+1 day');
            }

            return $workingDays;
        }

        // Fonction pour vérifier si une date est un jour férié
        function isHoliday($date)
        {
            $apiUrl = 'https://date.nager.at/api/v3/PublicHolidays/2024/FR';

            // Formatage de la date au format 'Y-m-d' pour la requête API
            $formattedDate = $date->format('Y-m-d');

            // Envoie de la requête à l'API
            $response = file_get_contents($apiUrl);

            // Analyse de la réponse JSON
            $holidays = json_decode(
                $response,
                true
            );

            // Vérification si la date est un jour férié
            foreach ($holidays as $holiday) {
                if ($holiday['date'] === $formattedDate) {
                    return true;
                }
            }

            return false;
        }

        // Supprime les jours de congé de l'utilisateur en prenant en compte les jours ouvrables
        $user = $vacation->getUser();

        // Récupère le nombre de jours de congé demandés par l'utilisateur grâce aux dates
        $startDate = $vacation->getStartDate();
        $endDate = $vacation->getEndDate();
        $nbDays = getWorkingDaysBetweenDates($startDate, $endDate);

        // Récupère le nombre de jours de congé restant de l'utilisateur dans NumberDayOffRepository
        $numberDayOff = $numberDayOffRepository->findOneBy(['userDay' => $user]);

        // Récupère le nombre de jours de congé restant de l'utilisateur
        $nbDaysAvailable = $numberDayOff->getAvailable();

        // Soustrait le nombre de jours de congé demandés par l'utilisateur au nombre de jours de congé restant de l'utilisateur
        $numberDayOff->setAvailable($nbDaysAvailable - $nbDays);

        // Enregistre le nombre de jours de congé restant de l'utilisateur
        $manager->persist($numberDayOff);

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
}
