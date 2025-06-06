<?php

namespace Service;

use App\Service\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd(): void
    {
        $result = $this->calculator->add(5, 3);
        $this->assertEquals(8, $result);
    }

    public function testSubtract(): void
    {
        $result = $this->calculator->subtract(10, 4);
        $this->assertEquals(6, $result);
    }
}


