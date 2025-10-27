<?php

use PHPUnit\Framework\TestCase;
use App\Math;

class MathTest extends TestCase
{
    private Math $math;

    protected function setUp(): void
    {
        $this->math = new Math();
    }

    public function testAddition()
    {
        $this->assertEquals(8, $this->math->addition(5, 3));
    }

    public function testSoustraction()
    {
        $this->assertEquals(2, $this->math->soustraction(5, 3));
    }

    public function testMultiplication()
    {
        $this->assertEquals(15, $this->math->multiplication(5, 3));
    }

    public function testDivision()
    {
        $this->assertEquals(5, $this->math->division(10, 2));
    }

    public function testDivisionByZeroThrowsException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->math->division(10, 0);
    }
}
