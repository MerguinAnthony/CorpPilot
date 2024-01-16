<?php

namespace App\Controller;

use App\Entity\Vacation;
use App\Repository\UserRepository;
use App\Form\VacationAvailableType;
use App\Form\VacationHoursType;
use App\Repository\VacationRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\NumberDayOffRepository;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StaffVacationController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/staff/Demande-de-conges', name: 'app_staff_vacation')]
    public function index(
        UserRepository $userRepository,
        Security $security,
        VacationRepository $vacationRepository,
        NumberDayOffRepository $numberDayOffRepository,
        EntityManagerInterface $manager,
        Request $request
    ): Response {
        // Récupérer l'utilisateur actuellement authentifié
        $user = $security->getUser();

        // Créer un formulaire de demande de congés
        $formDays = $this->createForm(VacationAvailableType::class);

        $formDays->handleRequest($request);

        // Vérifier si le formulaire a été soumis et est valide
        if ($formDays->isSubmitted() && $formDays->isValid()) {
            // Récupérer les données du formulaire
            $vacationData = $formDays->getData();

            // Créer une nouvelle instance de l'entité Vacation
            $vacation = new Vacation();
            $vacation->setStartDate($vacationData['startDate']);
            $vacation->setEndDate($vacationData['endDate']);
            $vacation->setApproved(0);

            // Associer l'utilisateur actuel à la demande de congés
            $vacation->setUser($user);

            // Enregistrer dans la base de données
            $manager->persist($vacation);
            $manager->flush();

            // Ajouter une notification ou un message de succès
            $this->addFlash('success', 'Votre demande de congés a été enregistrée avec succès.');

            // Rediriger après envoi du formulaire
            return $this->redirectToRoute('app_staff_vacation'); // Remplacez par la route de votre choix
        }

        // Créer un formulaire de demande de congés par heure
        $formHours = $this->createForm(VacationHoursType::class);

        $formHours->handleRequest($request);

        // Vérifier si le formulaire a été soumis et est valide
        if ($formHours->isSubmitted() && $formHours->isValid()) {
            // Récupérer les données du formulaire
            $vacationData = $formHours->getData();

            // Créer une nouvelle instance de l'entité Vacation
            $vacation = new Vacation();
            $vacation->setStartDate($vacationData['startDate']);
            $vacation->setEndDate($vacationData['endDate']);
            $vacation->setApproved(0);
            $vacation->setHours($vacationData['hours']);

            // Associer l'utilisateur actuel à la demande de congés
            $vacation->setUser($user);

            // Enregistrer dans la base de données
            $manager->persist($vacation);
            $manager->flush();

            // Ajouter une notification ou un message de succès
            $this->addFlash('success', 'Votre demande de congés a été enregistrée avec succès.');

            // Rediriger après envoi du formulaire
            return $this->redirectToRoute('app_staff_vacation'); // Remplacez par la route de votre choix
        }

        // Passer les informations de l'utilisateur et le formulaire à la vue
        return $this->render('pages/staff_vacation/index.html.twig', [
            'users' => $userRepository->findAll(),
            'currentUser' => $user,
            'formDays' => $formDays->createView(),
            'formHours' => $formHours->createView(),
            'vacations' => $vacationRepository->findBy(['user' => $user]),
            'dayVacations' => $numberDayOffRepository->findBy(['userDay' => $user]),
            'companyAbrev' => $this->getParameter('company_abrev'),
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/staff/vacation/{id}/modify', name: 'app_staff_vacation_modify')]
    public function modify(
        UserRepository $userRepository,
        Security $security,
        Vacation $vacation,
        Request $request,
        EntityManagerInterface $manager
    ): Response {
        // Récupérer l'utilisateur actuellement authentifié
        $user = $security->getUser();

        // Créer un formulaire de demande de congés
        $form = $this->createForm(VacationAvailableType::class, $vacation);
        $form->handleRequest($request);

        // Vérifier si le formulaire a été soumis et est valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer les données du formulaire
            $vacationData = $form->getData();

            // Créer une nouvelle instance de l'entité Vacation
            $vacation->setStartDate($vacationData['startDate']);
            $vacation->setEndDate($vacationData['endDate']);
            $vacation->setApproved(0);

            // Associer l'utilisateur actuel à la demande de congés
            $vacation->setUser($user);

            // Enregistrer dans la base de données
            $manager->persist($vacation);
            $manager->flush();

            // Ajouter une notification ou un message de succès
            $this->addFlash('success', 'Votre demande de congés a été modifiée avec succès.');

            // Rediriger après envoi du formulaire
            return $this->redirectToRoute('app_staff_vacation'); // Remplacez par la route de votre choix
        }

        // Passer les informations de l'utilisateur et le formulaire à la vue
        return $this->render('pages/staff_vacation/modify.html.twig', [
            'controller_name' => 'StaffVacationController',
            'users' => $userRepository->findAll(),
            'currentUser' => $user,
            'form' => $form->createView(),
            'vacation' => $vacation,
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/staff/vacation/{id}/delete', name: 'app_staff_vacation_delete')]
    public function delete(
        Vacation $vacation,
        EntityManagerInterface $manager,
        NumberDayOffRepository $numberDayOffRepository
    ): Response {
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
            // Récupère l'année de la date
            $year = $date->format('Y');

            // Récupère l'URL de l'API
            $apiUrl = 'https://date.nager.at/api/v3/PublicHolidays/' . $year . '/FR';

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
        $numberDayOff->setAvailable($nbDaysAvailable + $nbDays);

        // Enregistre le nombre de jours de congé restant de l'utilisateur
        $manager->persist($numberDayOff);

        // Supprimer la demande de congés
        $manager->remove($vacation);
        $manager->flush();

        // Ajouter une notification ou un message de succès
        $this->addFlash('success', 'Votre demande de congés a été supprimée avec succès.');

        // Rediriger après envoi du formulaire
        return $this->redirectToRoute('app_staff_vacation');
    }
}
