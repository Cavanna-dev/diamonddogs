<?php

namespace DiamondDogs\Domain\Model;

final class UserId
{
    /**
     * @var int
     */
    private $value;

    public function __construct($value)
    {
        $this->value = (int) $value;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }
}