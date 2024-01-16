<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Entity\NumberDayOff;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\NumberDayOffRepository;
use App\Repository\VacationRepository;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

/**
 * class index
 * @package App\Controller
 * @Route("/admin/gestion-des-Employes", name="app_user")
 */

class UserController extends AbstractController
{
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin/gestion-des-Employes', name: 'app_user')]
    public function index(UserRepository $userRepository, Security $security): Response
    {
        $currentUser = $security->getUser();

        $users = $userRepository->findAll();

        return $this->render('pages/user/index.html.twig', [
            'users' => $users,
            'currentUser' => $currentUser,
            'companyAbrev' => $this->getParameter('company_abrev'),
        ]);
    }

    /**
     * class detail
     * @Route("/admin/gestion-des-Employes/details/{id}", name="app_user_show", methods={"GET"})
     * @param int $id
     * @param UserRepository $userRepository
     * @param Security $security
     * @return Response
     * @IsGranted("ROLE_ADMIN")
     */

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin/gestion-des-Employes/details/{id}', name: 'app_user_show', methods: ['GET'])]
    public function detail(int $id, UserRepository $userRepository, Security $security): Response
    {
        $users = $userRepository->findAll();
        $adminCount = 0;
        $userCount = 0;

        foreach ($users as $user) {
            if (in_array('ROLE_ADMIN', $user->getRoles())) {
                $adminCount++;
            } else {
                $userCount++;
            }
        }

        $currentUser = $security->getUser();

        $user = $userRepository->find($id);

        return $this->render('pages/user/detail.html.twig', [
            'user' => $user,
            'companyAbrev' => $this->getParameter('company_abrev'),
            'company_name' => $this->getParameter('company_name'),
            'currentUser' => $currentUser,
            'adminCount' => $adminCount,
            'userCount' => $userCount,
        ]);
    }

    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    /**
     * class new
     * @Route("/admin/gestion-des-Employes/ajouter", name="app_user_new", methods={"GET","POST"})
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @param UserPasswordHasherInterface $passwordHasher
     * @param NumberDayOffRepository $numberDayOffRepository
     * @return Response
     * @IsGranted("ROLE_ADMIN")
     */

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin/gestion-des-Employes/ajouter', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $passwordHasher, Security $security): Response
    {
        $currentUser = $security->getUser();

        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setUpdatedAt(new \DateTimeImmutable());

            $password = $user->getPassword();

            $hashedPassword = $passwordHasher->hashPassword($user, $password);
            $user->setPassword($hashedPassword);

            $manager->persist($user);
            $manager->flush();

            $userId = $user->getId();

            $numberDayOff = new NumberDayOff();
            $numberDayOff->setUserDay($user);
            $numberDayOff->setAvailable(0);
            $numberDayOff->setCet(0);
            $numberDayOff->setHoursAvailable(0);
            $manager->persist($numberDayOff);
            $manager->flush();

            $this->addFlash('success', 'L\'employé a bien été ajouté');

            return $this->redirectToRoute('app_user');
        }

        return $this->render('pages/user/new.html.twig', [
            'form' => $form->createView(),
            'companyAbrev' => $this->getParameter('company_abrev'),
            'currentUser' => $currentUser,
        ]);
    }

    /**
     * class edit
     * @Route("/admin/gestion-des-Employes/modifier/{id}", name="app_user_edit", methods={"GET","POST"})
     * @param Request $request
     * @param User $user
     * @param EntityManagerInterface $manager
     * @param UserPasswordHasherInterface $passwordHasher
     * @param int $id
     * @return Response
     * @IsGranted("ROLE_ADMIN")
     */

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin/gestion-des-Employes/modifier/{id}', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $manager, UserPasswordHasherInterface $passwordHasher, int $id, Security $security): Response
    {
        $currentUser = $security->getUser();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        $user = $manager->getRepository(User::class)->find($id);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setUpdatedAt(new \DateTimeImmutable());

            if ($form->get('password')->getData()) {
                $password = $form->get('password')->getData();
                $hashedPassword = $passwordHasher->hashPassword($user, $password);
                $user->setPassword($hashedPassword);
            }

            $manager->persist($user);
            $manager->flush();

            $this->addFlash('success', 'L\'employé a bien été modifié');

            return $this->redirectToRoute('app_user');
        }

        return $this->render('pages/user/edit.html.twig', [
            'form' => $form->createView(),
            'companyAbrev' => $this->getParameter('company_abrev'),
            'currentUser' => $currentUser,
        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin/gestion-des-Employes/supprimer/{id}', name: 'app_user_delete', methods: ['POST', 'GET'])]
    public function delete(UserRepository $user, int $id, EntityManagerInterface $manager, NumberDayOffRepository $numberDayOff, VacationRepository $vacationRepository): Response
    {
        $numberDayOff = $numberDayOff->findOneBy(['userDay' => $id]);
        if ($numberDayOff) {
            $manager->remove($numberDayOff);
        }

        $vacation = $vacationRepository->findOneBy(['user' => $id]);
        if ($vacation) {
            $manager->remove($vacation);
        }

        $user = $user->find($id);
        if ($user) {
            $manager->remove($user);
        }

        $manager->flush();

        $this->addFlash('success', 'Votre salarié a bien été supprimé');

        return $this->redirectToRoute('app_user');
    }
}
