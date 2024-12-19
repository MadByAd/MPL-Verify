<?php

use MadByAd\MPLVerify\Verify;
use PHPUnit\Framework\TestCase;

final class TestFormatVerification extends TestCase
{

    public function testVerifyNameFormat()
    {
        $this->assertTrue(Verify::name("John Doe"));
        $this->assertFalse(Verify::name("John Doe #123"));
    }

    public function testVerifyUsernameFormat()
    {
        $this->assertTrue(Verify::username("@John_Doe"));
        $this->assertFalse(Verify::username("John Doe"));
    }

    public function testVerifyEmailFormat()
    {
        $this->assertTrue(Verify::email("someone@example.com.id"));
        $this->assertFalse(Verify::email("someone@example.com.id.net"));
        $this->assertFalse(Verify::email("someoneexample.com.id"));
    }

    public function testVerifyPhoneFormat()
    {
        $this->assertTrue(Verify::phone("+000 111 2222 3333"));
        $this->assertTrue(Verify::phone("+00011122223333"));
        $this->assertFalse(Verify::phone("+00011112222333344445555"));
    }

    public function testVerifyIpv4()
    {
        $this->assertTrue(Verify::ipv4("255.255.255.255"));
        $this->assertTrue(Verify::ipv4("192.168.1.10"));
        $this->assertFalse(Verify::ipv4("386.255.255.255"));
        $this->assertFalse(Verify::ipv4("255.386.255.255"));
        $this->assertFalse(Verify::ipv4("255.255.-255.255"));
        $this->assertFalse(Verify::ipv4("192.168.1"));
    }

}
