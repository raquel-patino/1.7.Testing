<?php

namespace Ejercicio1\Tests;
use PHPUnit\Framework\TestCase;
use Ejercicio1\NumberChecker; 

class NumberCheckerTest extends TestCase
{
    public function testIsEven()
    {
        $numberChecker = new NumberChecker(4);
        $this->assertTrue($numberChecker->isEven());
    }

    public function testIsPositive()
    {
        $numberChecker = new NumberChecker(4);
        $this->assertTrue($numberChecker->isPositive());

        $numberChecker = new NumberChecker(-3);
        $this->assertFalse($numberChecker->isPositive());
    }
}
