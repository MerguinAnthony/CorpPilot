<?php

namespace App\Controller;

use App\Entity\Vacation;
use App\Form\VacationType;
use App\Repository\NumberDayOffRepository;
use App\Repository\UserRepository;
use App\Repository\VacationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StaffVacationController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/staff/vacation', name: 'app_staff_vacation')]
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
        $form = $this->createForm(VacationType::class);
        $form->handleRequest($request);

        // Vérifier si le formulaire a été soumis et est valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer les données du formulaire
            $vacationData = $form->getData();

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

        // Passer les informations de l'utilisateur et le formulaire à la vue
        return $this->render('pages/staff_vacation/index.html.twig', [
            'controller_name' => 'StaffVacationController',
            'users' => $userRepository->findAll(),
            'currentUser' => $user,
            'form' => $form->createView(),
            'vacations' => $vacationRepository->findBy(['user' => $user]),
            'dayVacations' => $numberDayOffRepository->findBy(['userDay' => $user]),
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
        $form = $this->createForm(VacationType::class, $vacation);
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
        EntityManagerInterface $manager
    ): Response {
        // Supprimer la demande de congés
        $manager->remove($vacation);
        $manager->flush();

        // Ajouter une notification ou un message de succès
        $this->addFlash('success', 'Votre demande de congés a été supprimée avec succès.');

        // Rediriger après envoi du formulaire
        return $this->redirectToRoute('app_staff_vacation');
    }
}
