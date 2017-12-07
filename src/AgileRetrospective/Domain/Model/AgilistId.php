<?php

namespace AgileRetrospective\Domain\Model;

final class AgilistId
{
    /**
     * @var int
     */
    private $value;

    /**
     * AgilistName constructor.
     *
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
