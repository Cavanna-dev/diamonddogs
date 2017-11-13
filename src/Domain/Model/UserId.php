<?php

namespace DiamondDogs\Domain\Model;

final class UserId
{
    private $value;

    public function __construct($value)
    {
        $this->value = (int) $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}