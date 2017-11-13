<?php

namespace DiamondDogs\Domain\Model;

interface UserRepository
{
    public function find(UserId $userId);
    public function findAll();
    public function add(User $user);
    public function remove(User $user);
}