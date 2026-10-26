<?php
use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd(): void
    {
        $this->assertSame(5, (new Calculator())->add(2, 3));
    }
}