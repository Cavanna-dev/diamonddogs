<?php

namespace DiamondDogs\Domain\Repository;

use DiamondDogs\Domain\Model\User;
use DiamondDogs\Domain\Model\UserId;
use DiamondDogs\Domain\Model\UserName;

class InMemoryUserRepository implements UserRepository
{
    private $users;

    public function __construct()
    {
        $this->users[] = new User(
            new UserId(1), new UserName('John Doe')
        );
        $this->users[] = new User(
            new UserId(2), new UserName('Jean Bon')
        );
    }

    public function find(UserId $userId)
    {
    }

    public function findAll()
    {
        return (array) $this->users;
    }

    public function add(User $user)
    {
    }

    public function remove(User $user)
    {
    }
}