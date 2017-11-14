<?php

namespace DiamondDogs\Domain\Repository;

use DiamondDogs\Domain\Model\User;
use DiamondDogs\Domain\Model\UserId;

interface UserRepository
{
    public function find(UserId $userId);
    public function findAll();
    public function add(User $user);
    public function remove(User $user);
}