<?php

namespace DiamondDogs\Application\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use DiamondDogs\Domain\Repository\InMemoryUserRepository;

class UserController extends Controller
{
    /**
     * @Route("/users")
     */
    public function all()
    {
        $users = $this->get(InMemoryUserRepository::class)->findAll();

        //dump($users);

        return $this->json('success');
    }
}