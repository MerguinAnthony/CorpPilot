<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\SignId;
use App\Form\SignType;
use App\Form\UserType;
use App\Entity\Company;
use App\Form\CompanyType;
use App\Entity\NumberDayOff;
use App\Repository\CompanyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class CompanyProfileController extends AbstractController
{
    #[Route('/company/nouvelle/société', name: 'company_profile_new', methods: ['GET', 'POST'])]
    public function newCompany(
        Request $request,
        EntityManagerInterface $manager,
    ): Response {
        $form = $this->createForm(CompanyType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $company = $form->getData();

            $manager->persist($company);
            $manager->flush();

            $this->addFlash('success', 'Votre société a bien été enregistrée !');

            // Redirigez vers la création du premier administrateur
            return $this->redirectToRoute('company_admin_new', ['companyId' => $company->getId()]);
        }

        return $this->render('pages/company_profile/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    #[Route('/company/nouvelle/admin/{companyId}', name: 'company_admin_new')]
    public function newAdmin(
        Request $request,
        EntityManagerInterface $manager,
        UserPasswordHasherInterface $passwordHasher,
        int $companyId,
    ): Response {
        $company = $manager->getRepository(Company::class)->find($companyId);


        if (!$company) {
            throw $this->createNotFoundException('Société non trouvée');
        }

        $form = $this->createForm(UserType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            $user->setCompany($company);
            $user->setRoles(['ROLE_ADMIN']);
            $user->setCreatedAt(new \DateTimeImmutable());
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
            $numberDayOff->setHoursAvailable(10);
            $manager->persist($numberDayOff);
            $manager->flush();

            $this->addFlash('success', 'Votre premier administrateur a bien été créé !');

            return $this->redirectToRoute('app_security');
        }

        return $this->render('pages/company_profile/new_admin.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/company/{id}/edit', name: 'company_profile_edit', methods: ['GET', 'POST'])]
    public function editCompany(
        Request $request,
        Company $company,
        CompanyRepository $companyRepository,
        User $user,
        EntityManagerInterface $manager,
        Security $security,
    ): Response {

        $user = $security->getUser();

        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $manager->flush();

            $this->addFlash('success', 'Les informations de votre société ont été modifiées avec succès!');

            return $this->redirectToRoute('app_home');
        }

        return $this->render('pages/company_profile/edit.html.twig', [
            'form' => $form->createView(),
            'company' => $companyRepository->findOneBy(['id' => $user]),
            'currentUser' => $user,
        ]);
    }
}
