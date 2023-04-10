<?php

namespace App\DataFixtures;

use App\Entity\Usuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $userPasswordHasher)
    {
    }
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $user = new Usuario();
        $user->setUsername('harold');
        $hashedPassword = $this->userPasswordHasher->hashPassword($user, 'hola');
        $user->setPassword($hashedPassword);
        $manager->persist($user);
        $manager->flush();
    }
}
