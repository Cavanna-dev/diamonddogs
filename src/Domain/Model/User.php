<?php

namespace DiamondDogs\Domain\Model;

class User
{
    /**
     * @var UserId int
     */
    private $id;

    /**
     * @var UserName $name
     */
    private $name;

    /**
     * User constructor.
     *
     * @param int $id
     * @param string $name
     */
    public function __construct(
        UserId $id,
        UserName $name
    )
    {
        $this->id = $id;
        $this->name = $name;
    }
}