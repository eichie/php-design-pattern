<?php

namespace DesignPattern\Creational\FactoryPattern\Lesson1\Shape;

use DesignPattern\Creational\FactoryPattern\Lesson1\ShapeInterface;

/**
 * Class Rectangle
 *
 * @package DesignPattern\Creational\FactoryPattern\Lesson1\Shape
 */
class Rectangle implements ShapeInterface
{
    /**
     * @inheritdoc
     */
    public function draw() : string
    {
        return 'Inside Rectangle::draw() method.';
    }
}