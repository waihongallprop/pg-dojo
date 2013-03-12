<?php

namespace Dojo\Tests;

use Dojo\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    function setUp() {
        $this->calculator = new Calculator();
    }

    public function testDisplaysZeroWhenEnteringZero() {
        $this->calculator.enter('0');
        $this->assertEqual('0', calculator.display());
    }
}
