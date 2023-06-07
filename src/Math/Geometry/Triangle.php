<?php

namespace App2\Math\Geometry;
use App2\Math\Geometry\Interface\Drawable;

class Triangle implements Drawable
{
    public function draw(): string
    {
        return 'triangle';
    }
}