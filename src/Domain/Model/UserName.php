<?php

namespace DiamondDogs\Domain\Model;

final class UserName
{
    /**
     * @var string
     */
    private $value;

    /**
     * UserName constructor.
     *
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = (string) $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}