<?php

use MadByAd\MPLVerify\Verify;
use PHPUnit\Framework\TestCase;

final class TestIntVerification extends TestCase
{

    public function testVerifyIntRange()
    {
        $this->assertTrue(Verify::inRange(5, 10, 0));
        $this->assertFalse(Verify::inRange(-5, 10, 0));
    }

    public function testVerifyIntIsADay()
    {
        $this->assertTrue(Verify::isDayNumber(15));
        $this->assertFalse(Verify::isDayNumber(32));
    }

    public function testVerifyIntIsAMonth()
    {
        $this->assertTrue(Verify::isMonthNumber(6));
        $this->assertFalse(Verify::isMonthNumber(24));
    }

    public function testVerifyIntIsAYear()
    {
        $this->assertTrue(Verify::isYear(date("Y")));
        $this->assertFalse(Verify::isYear(date("Y") + 200));
    }

    public function testVerifyIntIs13Plus()
    {
        $this->assertTrue(Verify::is13plus(date("Y") - 18));
        $this->assertFalse(Verify::is13plus(date("Y") - 12));
    }

    public function testVerifyIntIs18Plus()
    {
        $this->assertTrue(Verify::is18plus(date("Y") - 20));
        $this->assertFalse(Verify::is18plus(date("Y") - 12));
    }

}
