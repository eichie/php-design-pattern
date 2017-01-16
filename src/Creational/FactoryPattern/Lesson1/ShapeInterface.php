<?php

namespace DesignPattern\Creational\FactoryPattern\Lesson1;

/**
 * Interface ShapeInterface
 *
 * @package DesignPattern\Creational\FactoryPattern\Lesson1
 */
interface ShapeInterface
{
    /**
     * @return string
     */
    public function draw() : string;
}