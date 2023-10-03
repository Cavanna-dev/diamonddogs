<?php

namespace AgileRetrospective\Domain\Model;

class Agilist
{
    /** @var AgilistId */
    private $id;

    /** @var AgilistName */
    private $name;

    /**
     * Agilist constructor.
     *
     * @param AgilistId   $id
     * @param AgilistName $name
     */
    public function __construct(AgilistId $id, AgilistName $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return AgilistId
     */
    public function getId(): AgilistId
    {
        return $this->id;
    }

    /**
     * @return AgilistName
     */
    public function getName(): AgilistName
    {
        return $this->name;
    }
}
