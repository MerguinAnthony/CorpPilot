<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SetUserType;
use App\Repository\CompanyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

// ...

class ProfileController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/staff/profile', name: 'app_profile')]
    public function index(
        Security $security,
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $manager,
        CompanyRepository $companyRepository
    ): Response {
        $currentUser = $security->getUser();

        $user = null;
        if ($currentUser !== null) {
            $user = $manager->getRepository(User::class)->find($currentUser->getId());
        }

        $form = $this->createForm(SetUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setUpdatedAt(new \DateTimeImmutable());

            if ($form->get('password')->getData()) {
                $password = $form->get('password')->getData();
                $hashedPassword = $passwordHasher->hashPassword($user, $password);
                $user->setPassword($hashedPassword);
            }

            $manager->persist($user);
            $manager->flush();

            $this->addFlash('success', 'Votre profil a bien été modifié');

            return $this->redirectToRoute('app_staff_vacation');
        }

        return $this->render('pages/profile/index.html.twig', [
            'form' => $form->createView(),
            'company' => $companyRepository->findOneBy(['id' => $currentUser]),
            'currentUser' => $currentUser,
        ]);
    }
}
