<?php

namespace DesignPattern\Tests\Creational\FactoryPattern\Lesson1;

use DesignPattern\Creational\FactoryPattern\Lesson1\Shape\Rectangle;
use DesignPattern\Creational\FactoryPattern\Lesson1\ShapeFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class ShapeFactoryDemo
 *
 * @package DesignPattern\Tests\Creational\FactoryPattern\Lesson1
 */
class ShapeFactoryDemo extends TestCase
{
    /**
     * @test
     */
    public function itShouldBeTheRectangleClass() {

        $factory = new ShapeFactory();
        $shape = $factory->getShape(Rectangle::class);

        $this->assertContains(get_class($shape), Rectangle::class);
    }

    /**
     * @test
     */
    public function itShouldDrawRectangle() {

        $factory = new ShapeFactory();
        $shape = $factory->getShape(Rectangle::class);

        $this->assertEquals($shape->draw(), 'Inside Rectangle::draw() method.');
    }
}