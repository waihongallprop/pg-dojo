<?php

namespace Dojo\Tests;

use Dojo\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    function testDisplaysZeroWhenEnteringZero()
    {
        // Arrange
        $this->calculator = new Calculator();

        // Act
        $this->calculator->enter('0');

        // Assert
        $expected = '0';
        $actual = $this->calculator->display();
        $this->assertEquals($expected, $actual);
    }
}
