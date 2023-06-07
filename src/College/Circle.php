<?php

namespace App2\College;

class Circle
{
    public function __construct(private array $people)
    {}

    public function getPeople(): string
    {
        return implode(', ', $this->people);
    }
}
