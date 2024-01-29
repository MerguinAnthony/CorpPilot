<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Company;
use App\Entity\NumberDayOff;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $company = new Company();
        $company->setCompanyName('Mairie de Deyvillers');
        $company->setCompanyAbrev('Deyvi');
        $company->setCompanyAddress('2 Rue de Lorraine');
        $company->setCompanyCity('Deyvillers');
        $company->setCompanyZipCode('88000');
        $company->setCompanyPhone('0329340870');
        $company->setCompanyEmail('contact@deyvillers.fr');
        $company->setCompanySiret(1910172272363638);
        $company->setCreatedAt(new \DateTimeImmutable('now'));
        $manager->persist($company);

        $manager->flush();

        $user = new User();
        $user->setEmail('contact@amerguin.fr');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->passwordHasher->hashPassword(
            $user,
            'password'
        ));
        $user->setFirstName('Anthony');
        $user->setLastName('Merguin');
        $user->setBirthday(new \DateTimeImmutable(1991 - 27 - 03));
        $user->setAdress('1 rue de la mairie');
        $user->setCity('Biffontaine');
        $user->setZipCode('88430');
        $user->setPhone('0601331080');
        $user->setSocialSecurity('1910391080001');
        $user->setJob('Développeur Web');
        $user->setCreatedAt(new \DateTimeImmutable('now'));
        $user->setUpdatedAt(new \DateTimeImmutable('now'));
        $user->setCompany($company);

        $numberDayOff = new NumberDayOff();
        $numberDayOff->setAvailable(10);
        $numberDayOff->setCet(5);
        $numberDayOff->setHoursAvailable(20.5);
        $numberDayOff->setUserDay($user);
        $manager->persist($numberDayOff);

        for ($i = 0; $i < 5; $i++) {
            $user = new User();
            $user->setEmail('contact' . $i . '@amerguin.fr');
            $user->setRoles(['ROLE_USER']);
            $user->setPassword($this->passwordHasher->hashPassword(
                $user,
                'password'
            ));
            $user->setFirstName('Anthony');
            $user->setLastName('Merguin');
            $user->setBirthday(new \DateTimeImmutable('1991-03-27')); // Corrected date format
            $user->setAdress('1 rue de la mairie');
            $user->setCity('Biffontaine');
            $user->setZipCode('88430');
            $user->setPhone('0601331080');
            $user->setSocialSecurity('1910391080001');
            $user->setJob('Développeur');
            $user->setCreatedAt(new \DateTimeImmutable('now'));
            $user->setUpdatedAt(new \DateTimeImmutable('now'));
            $user->setCompany($company);
            $manager->persist($user);

            $numberDayOff = new NumberDayOff();
            $numberDayOff->setAvailable(10);
            $numberDayOff->setCet(5);
            $numberDayOff->setHoursAvailable(20.5);
            $numberDayOff->setUserDay($user);
            $manager->persist($numberDayOff);
        }

        $manager->flush();
    }
}
