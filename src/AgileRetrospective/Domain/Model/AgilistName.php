<?php

namespace AgileRetrospective\Domain\Model;

final class AgilistName
{
    /**
     * @var string
     */
    private $value;

    /**
     * AgilistName constructor.
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
