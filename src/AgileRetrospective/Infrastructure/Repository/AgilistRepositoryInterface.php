<?php

namespace AgileRetrospective\Infrastructure\Repository;

use AgileRetrospective\Domain\Model\Agilist;
use AgileRetrospective\Domain\Model\AgilistId;

interface AgilistRepositoryInterface
{
    public function find(AgilistId $userId);
    public function findAll();
    public function add(Agilist $user);
    public function remove(Agilist $user);
}
