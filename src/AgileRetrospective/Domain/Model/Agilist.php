<?php

namespace AgileRetrospective\Domain\Model;

class Agilist
{
    /**
     * @var AgilistId int
     */
    private $id;

    /**
     * @var AgilistName $name
     */
    private $name;

    /**
     * Agilist constructor.
     *
     * @param AgilistId   $id
     * @param AgilistName $name
     */
    public function __construct(
        AgilistId $id,
        AgilistName $name
    )
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getIdentity(): array
    {

    }
}
