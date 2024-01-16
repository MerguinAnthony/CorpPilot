<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Faker\Generator;
use DateTimeImmutable;
use App\Entity\Vacation;
use App\Entity\NumberDayOff;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;
    private Generator $faker;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        $users = []; // Initialisation du tableau

        // Création d'un utilisateur administrateur
        $adminUser = new User();
        $adminUser->setEmail('contact@amerguin.fr');
        $adminUser->setRoles(['ROLE_ADMIN']);
        $adminUser->setFirstName('Anthony');
        $adminUser->setLastName('MERGUIN');
        $adminUser->setPhone('0601331080');
        $adminUser->setAdress('34 rue de la mairie');
        $adminUser->setCity('Biffontaine');
        $adminUser->setZipCode('88430');
        $adminUser->setBirthday(new \DateTimeImmutable('1991-03-27'));
        $adminUser->setSocialSecurity(1910322483915);
        $adminUser->setJob('Développeur Web');
        $adminUser->setPassword('Am270391');
        $adminUser->setCreatedAt(new DateTimeImmutable());
        $manager->persist($adminUser);

        // Création de plusieurs utilisateurs normaux
        for ($i = 0; $i < 4; $i++) {
            $user = new User();
            $user->setEmail($this->faker->email);
            $user->setRoles(['ROLE_USER']);
            $user->setFirstName($this->faker->firstName);
            $user->setLastName($this->faker->lastName);
            $user->setPhone('0601331080');
            $user->setAdress($this->faker->streetAddress);
            $user->setCity($this->faker->city);
            $user->setZipCode($this->faker->postcode);
            $user->setBirthday(new \DateTimeImmutable('1991-03-27'));
            $user->setSocialSecurity($this->faker->numberBetween(1000000000000, 9999999999999));
            $user->setJob($this->faker->jobTitle);
            $user->setPassword('password');
            $user->setCreatedAt(new \DateTimeImmutable());
            $manager->persist($user);
        }

        $manager->flush();

        // Récupération des IDs après le flush
        $users = array_map(function ($user) {
            return $user->getId();
        }, [$adminUser, ...$manager->getRepository(User::class)->findAll()]);


        for ($va = 0; $va < 10; $va++) {
            // Créez une nouvelle vacation
            $vacation = new Vacation();
            $vacation->setStartDate($this->faker->dateTimeBetween('-1 years', 'now'));
            $vacation->setEndDate($this->faker->dateTimeBetween('now', '+1 years'));
            $vacation->setApproved($this->faker->boolean);
            $vacation->setUser($user = $manager->getRepository(User::class)->find($this->faker->randomElement($users)));

            $manager->persist($vacation);
        }
        $manager->flush();

        // Création de plusieurs congés
        // Récupération des utilisateurs après le flush
        $users = $manager->getRepository(User::class)->findAll();

        foreach ($users as $user) {
            $numberDayOff = new NumberDayOff();
            $numberDayOff->setAvailable($this->faker->numberBetween(0, 25));
            $numberDayOff->setCet($this->faker->numberBetween(0, 50));
            $numberDayOff->setHoursAvailable($this->faker->randomFloat(2, 0, 100));
            $numberDayOff->setUserDay($user);

            $manager->persist($numberDayOff);
        }

        $manager->flush();
    }
}
