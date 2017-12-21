<?php

namespace AgileRetrospective\Infrastructure\Repository;

use AgileRetrospective\Domain\Model\Agilist;
use AgileRetrospective\Domain\Model\AgilistId;
use AgileRetrospective\Domain\Model\AgilistName;

class InMemoryAgilistRepository implements AgilistRepositoryInterface
{
    /** @var array */
    private $agilists;

    /** @var array */
    private $users;

    public function __construct()
    {
        $this->agilists[] = new Agilist(
            new AgilistId(1), new AgilistName('John Doe')
        );
        $this->users[] = new Agilist(
            new AgilistId(2), new AgilistName('Jean Bon')
        );
    }

    public function find(AgilistId $userId)
    {
    }

    public function findAll(): array
    {
        return $this->users;
    }

    public function add(Agilist $user)
    {
    }

    public function remove(Agilist $user)
    {
    }
}
