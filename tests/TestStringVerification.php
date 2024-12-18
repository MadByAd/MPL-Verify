<?php

use MadByAd\MPLVerify\Verify;
use PHPUnit\Framework\TestCase;

final class TestStringVerification extends TestCase
{

    public function testVerifyStringLength()
    {
        $this->assertTrue(Verify::length("Hello World", 12));
        $this->assertFalse(Verify::length("Hello World !", 12));
        $this->assertFalse(Verify::length("Hello", 12, 6));
    }

    public function testVerifyWhetherStringHasWhiteSpace()
    {
        $this->assertTrue(Verify::hasWhitespace("Hello World"));
        $this->assertFalse(Verify::hasWhitespace("HelloWorld"));
    }

    public function testVerifyWhetherStringIsAlphabetical()
    {
        $this->assertTrue(Verify::isAlphabetical("HelloWorld"));
        $this->assertTrue(Verify::isAlphabetical("Hello World", true));
        $this->assertFalse(Verify::isAlphabetical("Hello World"));
        $this->assertFalse(Verify::isAlphabetical("HelloWorld123"));
    }

    public function testVerifyWhetherStringHasAlphabetical()
    {
        $this->assertTrue(Verify::hasAlphabetical("Hello World"));
        $this->assertTrue(Verify::hasAlphabetical("Hello 12345"));
        $this->assertTrue(Verify::hasAlphabetical("Hello !@#$%"));
        $this->assertFalse(Verify::hasAlphabetical("12334567890"));
    }

    public function testVerifyWhetherStringdoesntHaveAlphabetical()
    {
        $this->assertTrue(Verify::doesntHaveAlphabetical("12345678"));
        $this->assertTrue(Verify::doesntHaveAlphabetical("1234 5678", true));
        $this->assertFalse(Verify::doesntHaveAlphabetical("123 456"));
        $this->assertFalse(Verify::doesntHaveAlphabetical("Hello"));
        $this->assertFalse(Verify::doesntHaveAlphabetical("HelloWorld123"));
    }

    public function testVerifyWhetherStringIsAlphanumeric()
    {
        $this->assertTrue(Verify::isAlphanumeric("Hello123"));
        $this->assertTrue(Verify::isAlphanumeric("Hello 123", true));
        $this->assertFalse(Verify::isAlphanumeric("Hello 123"));
        $this->assertFalse(Verify::isAlphanumeric("Hello123!"));
    }

    public function testVerifyWhetherStringHasAlphanumeric()
    {
        $this->assertTrue(Verify::hasAlphanumeric("Hello123!@#"));
        $this->assertTrue(Verify::hasAlphanumeric("Hello!@#"));
        $this->assertTrue(Verify::hasAlphanumeric("123!@#"));
        $this->assertFalse(Verify::hasAlphanumeric("!@#$%"));
    }

    public function testVerifyWhetherStringdoesntHaveAlphanumeric()
    {
        $this->assertTrue(Verify::doesntHaveAlphanumeric("!@#"));
        $this->assertTrue(Verify::doesntHaveAlphanumeric("!@# $%^", true));
        $this->assertFalse(Verify::doesntHaveAlphanumeric("!@# $%^"));
        $this->assertFalse(Verify::doesntHaveAlphanumeric("!@#Hello"));
        $this->assertFalse(Verify::doesntHaveAlphanumeric("!@#123"));
    }

    public function testVerifyWhetherStringIsNumeric()
    {
        $this->assertTrue(Verify::isNumeric("12345"));
        $this->assertTrue(Verify::isNumeric("12345 67890", true));
        $this->assertFalse(Verify::isNumeric("12345 67890"));
        $this->assertFalse(Verify::isNumeric("Hello 12345"));
    }

    public function testVerifyWhetherStringHasNumeric()
    {
        $this->assertTrue(Verify::hasNumeric("12345"));
        $this->assertTrue(Verify::hasNumeric("Hello 12345"));
        $this->assertTrue(Verify::hasNumeric("!@#$% 12345"));
        $this->assertFalse(Verify::hasNumeric("Hello World"));
    }

    public function testVerifyWhetherStringdoesntHaveNumeric()
    {
        $this->assertTrue(Verify::doesntHaveNumeric("HelloWorld"));
        $this->assertTrue(Verify::doesntHaveNumeric("Hello World", true));
        $this->assertFalse(Verify::doesntHaveNumeric("Hello World"));
        $this->assertFalse(Verify::doesntHaveNumeric("Hello12345"));
    }

    public function testVerifyWhetherStringIsADayName()
    {
        $this->assertTrue(Verify::isDayName("monday"));
        $this->assertTrue(Verify::isDayName("tuesday"));
        $this->assertTrue(Verify::isDayName("mon"));
        $this->assertTrue(Verify::isDayName("tues"));
        $this->assertFalse(Verify::isDayName("apple"));
        $this->assertFalse(Verify::isDayName("banana"));
    }

    public function testVerifyWhetherStringIsAMonthName()
    {
        $this->assertTrue(Verify::isMonthName("January"));
        $this->assertTrue(Verify::isMonthName("December"));
        $this->assertTrue(Verify::isMonthName("Jan"));
        $this->assertTrue(Verify::isMonthName("Dec"));
        $this->assertFalse(Verify::isMonthName("apple"));
        $this->assertFalse(Verify::isMonthName("banana"));
    }

}
