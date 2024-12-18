<?php

use MadByAd\MPLVerify\Verify;
use PHPUnit\Framework\TestCase;

final class TestVariableVerification extends TestCase
{

    public function testVerifyWhetherArrayIsIndexed()
    {
        $this->assertTrue(Verify::isArrayIndexed(["apple", "banana", "melon"]));
        $this->assertFalse(Verify::isArrayIndexed([2 => "apple", 1 => "banana", 3 => "melon"]));
        $this->assertFalse(Verify::isArrayIndexed(["a" => "apple", "b" => "banana", "c" => "melon"]));
    }

    public function testVerifyWhetherArrayIsAssociative()
    {
        $this->assertFalse(Verify::isArrayAssociative(["apple", "banana", "melon"]));
        $this->assertTrue(Verify::isArrayAssociative([2 => "apple", 1 => "banana", 3 => "melon"]));
        $this->assertTrue(Verify::isArrayAssociative(["a" => "apple", "b" => "banana", "c" => "melon"]));
    }

    public function testVerifyWhetherArrayIsMultidimensional()
    {
        $this->assertTrue(Verify::isArrayMultidimensional([
            [1, 2],
            [3, 4],
            [5, 6],
        ]));
        $this->assertFalse(Verify::isArrayMultidimensional([
            [1, 2],
            [3, 4],
            "apple",
        ]));
        $this->assertFalse(Verify::isArrayMultidimensional(["apple", "banana", "melon"]));
    }

    public function testVerifyTrue()
    {
        $this->assertTrue(Verify::isTrue(1));
        $this->assertTrue(Verify::isTrue("Yes"));
        $this->assertTrue(Verify::isTrue("yes"));
        $this->assertTrue(Verify::isTrue("yeS"));
        $this->assertTrue(Verify::isTrue("yEs"));
        $this->assertTrue(Verify::isTrue("y"));
        $this->assertTrue(Verify::isTrue("True"));
        $this->assertTrue(Verify::isTrue("tRuE"));
        $this->assertFalse(Verify::isTrue(0));
        $this->assertFalse(Verify::isTrue("false"));
        $this->assertFalse(Verify::isTrue("bananas"));
    }

    public function testVerifyFalse()
    {
        $this->assertTrue(Verify::isFalse(0));
        $this->assertTrue(Verify::isFalse("no"));
        $this->assertTrue(Verify::isFalse("nO"));
        $this->assertTrue(Verify::isFalse("n"));
        $this->assertTrue(Verify::isFalse("N"));
        $this->assertTrue(Verify::isFalse("false"));
        $this->assertTrue(Verify::isFalse("fAlSe"));
        $this->assertFalse(Verify::isFalse(1));
        $this->assertFalse(Verify::isFalse("true"));
        $this->assertFalse(Verify::isFalse("grape"));
    }

    public function testVerifyJsonValidity()
    {
        $this->assertTrue(Verify::isJSON("{\"name\":\"aditya\",\"age\":16}"));
        $this->assertTrue(Verify::isJSON("{`name`:`aditya`,`age`:16}"));
        $this->assertTrue(Verify::isJSON("{'name':'aditya','age':16}"));
        $this->assertFalse(Verify::isJSON("{'name':'aditya','age':16}", false));
        $this->assertFalse(Verify::isJSON("{\"name\"\"aditya\",\"age\":16}"));
        $this->assertFalse(Verify::isJSON("\"name\":\"aditya\",\"age\":16}"));
        $this->assertFalse(Verify::isJSON("{name:\"aditya\",\"age\":16}"));
    }

    public function testVerifyXmlValidity()
    {
        $this->assertTrue(Verify::isXML("<people><name>Adit</name><age>16</age></people>"));
        $this->assertFalse(Verify::isXML("<people><name>Adit<name><age>16<age></people>"));
    }

}
