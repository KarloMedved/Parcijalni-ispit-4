<?php

namespace App2\Math\Geometry;

use App2\Math\Geometry\Interface\Drawable;

class Square implements Drawable
{
    public function __construct(private int $side)
    {
        
    }

    public function draw(): string
    {
        return '■';
    }
}