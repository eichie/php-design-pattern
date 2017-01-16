<?php

namespace DesignPattern\Creational\FactoryPattern\Lesson1\Shape;

use DesignPattern\Creational\FactoryPattern\Lesson1\ShapeInterface;

/**
 * Class Square
 *
 * @package DesignPattern\Creational\FactoryPattern\Lesson1\Shape
 */
class Square implements ShapeInterface
{
    /**
     * @inheritdoc
     */
    public function draw() : string
    {
        return 'Inside Square::draw() method.';
    }
}