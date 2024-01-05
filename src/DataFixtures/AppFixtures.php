<?php

namespace App\DataFixtures;

use App\Entity\User;
use DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new User();
        $user->setEmail('contact@amerguin.fr');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setFirstName('Anthony');
        $user->setLastName('MERGUIN');
        $user->setPhone('0601331080');
        $user->setAdress('34 rue de la mairie');
        $user->setCity('Biffontaine');
        $user->setZipCode('88430');
        $user->setBirthday(new DateTimeImmutable('1991-03-27'));
        $user->setSocialSecurity(1910322483915);
        $user->setCreatedAt(new DateTimeImmutable('now'));
        $user->setJob('Développeur Web');
        $user->setPlainPassword('Am270391');
        $manager->persist($user);

        $user = new User();
        $user->setEmail('contact@amtest.xyz');
        $user->setRoles(['ROLE_USER']);
        $user->setFirstName('Alain');
        $user->setLastName('MERGUIN');
        $user->setPhone('0601331080');
        $user->setAdress('34 rue de la mairie');
        $user->setCity('Biffontaine');
        $user->setZipCode('88430');
        $user->setBirthday(new DateTimeImmutable('1991-03-27'));
        $user->setSocialSecurity(1910322434015);
        $user->setCreatedAt(new DateTimeImmutable('now'));
        $user->setJob('Développeur Web');
        $user->setPlainPassword('Am270391');
        $manager->persist($user);

        $manager->flush();
    }
}
