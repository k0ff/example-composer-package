<?php

namespace K0ff\Hello\Tests;

use K0ff\Hello\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);

        $this->assertEquals(5, $result);
    }
}
