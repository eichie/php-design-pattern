<?php

namespace DesignPattern\Creational\FactoryPattern\Lesson1;

use DesignPattern\Creational\FactoryPattern\Lesson1\Shape\Circle;
use DesignPattern\Creational\FactoryPattern\Lesson1\Shape\Rectangle;
use DesignPattern\Creational\FactoryPattern\Lesson1\Shape\Square;

/**
 * Class ShapeFactory
 *
 * @package DesignPattern\Creational\FactoryPattern\Lesson1
 */
class ShapeFactory
{
    /**
     * @param string $shape
     * @return ShapeInterface|null
     */
    public function getShape(string $shape): ?ShapeInterface
    {
        if ($shape === Rectangle::class) {
            return new Rectangle();
        }

        if ($shape === Square::class) {
            return new Square();
        }

        if ($shape === Circle::class) {
            return new Circle();
        }

        return null;
    }
}