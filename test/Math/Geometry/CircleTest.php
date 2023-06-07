<?php

namespace App2\Test\Math\Geometry;

use App2\Math\Geometry\Circle;
use App2\Math\Geometry\Exception\RadiusException;
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    public function testDrawReturnsCircleCharacter()
    {
        $circle = new Circle(10);

        $this->assertSame('○', $circle->draw());
    }

    /**
     * @dataProvider getRadiusWithExpectedExtent
     */
    public function testGetExtentReturnExpectedResult(int $radius, float $expectedExtent)
    {
        $circle = new Circle($radius);

        $this->assertSame($expectedExtent, $circle->getExtent());
    }

    public static function getRadiusWithExpectedExtent()
    {
        return [
            [10, 2 * 3.14 * 10],
            [100, 2 * 3.14 * 100],
            [5, 2 * 3.14 * 5],
        ];
    }

    /**
     * @dataProvider getInvalidRadiuses
     */
    public function testCreatingACircleWillThrowExceptionIfRadiusIsInvalid(int $radius)
    {
        $this->expectException(RadiusException::class);
        $this->expectExceptionMessage('Radius is invalid');
        $this->expectExceptionCode(476);

        new Circle($radius);
    }

    public static function getInvalidRadiuses()
    {
        return [
            [-10],
            [0],
            [-100]
        ];
    }
}