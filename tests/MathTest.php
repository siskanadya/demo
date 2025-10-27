<?php

use PHPUnit\Framework\TestCase;
use App\Math;

final class MathTest extends TestCase
{
    private Math $math;

    protected function setUp(): void
    {
        $this->math = new Math();
    }

    public function testAddition(): void
    {
        $this->assertEquals(8, $this->math->addition(5, 3));
    }

    public function testSoustraction(): void
    {
        $this->assertEquals(2, $this->math->soustraction(5, 3));
    }

    public function testMultiplication(): void
    {
        $this->assertEquals(15, $this->math->multiplication(5, 3));
    }

    public function testDivision(): void
    {
        $this->assertEquals(5, $this->math->division(10, 2));
    }

    public function testDivisionByZeroThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->math->division(10, 0);
    }
}
