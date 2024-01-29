<?php

namespace App\Controller;

use App\Entity\Vacation;
use App\Form\VacationFormType;
use App\Service\DaysBetweenDates;
use App\Repository\UserRepository;
use App\Repository\CompanyRepository;
use App\Repository\VacationRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\NumberDayOffRepository;
use App\Service\DaysOutsidePeriod;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StaffVacationController extends AbstractController
{
    private DaysBetweenDates $daysBetweenDates;
    private DaysOutsidePeriod $daysOutsidePeriod;

    public function __construct(
        DaysBetweenDates $daysBetweenDates,
        DaysOutsidePeriod $daysOutsidePeriod
    ) {
        $this->daysBetweenDates = $daysBetweenDates;
        $this->daysOutsidePeriod = $daysOutsidePeriod;
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/staff/Demande-de-conges', name: 'app_staff_vacation')]
    public function index(
        UserRepository $userRepository,
        Security $security,
        VacationRepository $vacationRepository,
        NumberDayOffRepository $numberDayOffRepository,
        EntityManagerInterface $manager,
        CompanyRepository $companyRepository,
        Request $request
    ): Response {
        $user = $security->getUser();

        $form = $this->createForm(VacationFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $vacation = $form->getData();
            $vacation->setApproved(0);

            $startDate = $vacation->getStartDate();
            $endDate = $vacation->getEndDate();
            $nbDays = $this->daysBetweenDates->getWorkingDaysBetweenDates($startDate, $endDate);

            // Si le congé est de type "1", on calcule le nombre de jours en dehors de la période
            if ($vacation->getAccount() == 1) {
                $nbDaysOutsidePeriod = $this->daysOutsidePeriod->getWorkingDaysOutsidePeriod($startDate, $endDate);
                $vacation->setNbDaysOutsidePeriod($nbDaysOutsidePeriod - $nbDays);
            }

            // Si le congé est de type "3", on calcule le nombre d'heures en calculant la différence entre les deux datetime
            if ($vacation->getAccount() == 3) {
                $startHours = $vacation->getStartHours();
                $endHours = $vacation->getEndHours();

                // Calculer la différence en minutes
                $interval = $endHours->diff($startHours);
                $nbHours = $interval->h + ($interval->i / 60); // Convertir les minutes en heures décimales
                $vacation->setNbHours($nbHours);
            }


            $vacation->setNbDays($nbDays);
            $vacation->setUser($user);

            $manager->persist($vacation);
            $manager->flush();
            $this->addFlash('success', 'Votre demande de congés a été enregistrée avec succès.');

            return $this->redirectToRoute('app_staff_vacation');
        }

        return $this->render('pages/staff_vacation/index.html.twig', [
            'users' => $userRepository->findAll(),
            'currentUser' => $user,
            'form' => $form->createView(),
            'vacations' => $vacationRepository->findBy(['user' => $user]),
            'dayVacations' => $numberDayOffRepository->findBy(['userDay' => $user]),
            'company' => $companyRepository->findOneBy(['id' => $user]),
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/staff/vacation/{id}/modify', name: 'app_staff_vacation_modify')]
    public function modify(
        int $id,
        UserRepository $userRepository,
        Security $security,
        Vacation $vacation,
        Request $request,
        EntityManagerInterface $manager,
        CompanyRepository $companyRepository,
    ): Response {

        $user = $security->getUser();

        $form = $this->createForm(VacationFormType::class, $vacation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $vacation = $form->getData();
            $vacation->setApproved(0);

            $startDate = $vacation->getStartDate();
            $endDate = $vacation->getEndDate();
            $nbDays = $this->daysBetweenDates->getWorkingDaysBetweenDates($startDate, $endDate);

            // Si le congé est de type "1", on calcule le nombre de jours en dehors de la période
            if ($vacation->getAccount() == 1) {
                $nbDaysOutsidePeriod = $this->daysOutsidePeriod->getWorkingDaysOutsidePeriod($startDate, $endDate);
                $vacation->setNbDaysOutsidePeriod($nbDaysOutsidePeriod - $nbDays);
            }

            // Si le congé est de type "3", on calcule le nombre d'heures
            if ($vacation->getAccount() == 3) {
                $startHours = $vacation->getStartHours();
                $endHours = $vacation->getEndHours();
                $nbHours = $endHours->diff($startHours)->format('%h');
                $vacation->setNbHours($nbHours);
            }
            $vacation->setNbDays($nbDays);
            $vacation->setUser($user);

            $manager->persist($vacation);
            $manager->flush();
            $this->addFlash('success', 'Votre demande de congés a été modifiée avec succès.');

            return $this->redirectToRoute('app_staff_vacation');
        }

        return $this->render('pages/staff_vacation/modify.html.twig', [
            'users' => $userRepository->findAll(),
            'currentUser' => $user,
            'form' => $form->createView(),
            'vacation' => $vacation,
            'company' => $companyRepository->findOneBy(['id' => $user]),
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/staff/vacation/{id}/delete', name: 'app_staff_vacation_delete')]
    public function delete(
        Vacation $vacation,
        EntityManagerInterface $manager,
        NumberDayOffRepository $numberDayOffRepository
    ): Response {
        if ($vacation->getApproved() == 1) {
            $this->addFlash('danger', 'Vous ne pouvez pas supprimer une demande de congés validée.');
            return $this->redirectToRoute('app_staff_vacation');
        } else {
            $manager->remove($vacation);
            $manager->flush();
            $this->addFlash('success', 'Votre demande de congés a été supprimée avec succès.');
            return $this->redirectToRoute('app_staff_vacation');
        }
    }
}
