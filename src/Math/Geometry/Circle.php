<?php

namespace App2\Math\Geometry;

use App2\Math\Constants as Konstante;
use App2\Math\Geometry\Exception\RadiusException;
use App2\Math\Geometry\Interface\Drawable;

class Circle implements Drawable
{
    public function __construct(private int $radius)
    {
        if ($this->radius <= 0) {
            throw new RadiusException();
        }
    }

    public function getExtent(): float
    {
        return 2 * $this->radius * Konstante::PI;
    }

    public function draw(): string
    {
        return '○';
    }
}