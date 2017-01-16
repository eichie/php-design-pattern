<?php

namespace DesignPattern\Creational\FactoryPattern\Lesson1\Shape;

use DesignPattern\Creational\FactoryPattern\Lesson1\ShapeInterface;

/**
 * Class Circle
 *
 * @package DesignPattern\Creational\FactoryPattern\Lesson1\Shape
 */
class Circle implements ShapeInterface
{
    /**
     * @inheritdoc
     */
    public function draw() : string
    {
        return 'Inside Circle::draw() method.';
    }
}