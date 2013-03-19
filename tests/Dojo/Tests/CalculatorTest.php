<?php

namespace Dojo\Tests;

use Dojo\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testDisplaysZeroWhenEnteringZero()
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

    public function testDisplayNumberInputs()
    {
        // Arrange
        $this->calculator = new Calculator();

        // Act
        $this->calculator->enter('1');
        $this->calculator->enter('2');

        // Assert
        $expected = '12';
        $actual = $this->calculator->display();
        $this->assertEquals($expected, $actual);
    }

    /*public function testAddingTwoNumbers(){
        $this->calculator = new Calculator();

        // Act
        $this->calculator->enter('1');
        $this->calculator->enter('2');
        $this->calculator->doAddition();

        // Assert
        $expected = '3';
        $actual = $this->calculator->display();
        $this->assertEquals($expected, $actual);
     
    }*/
}
