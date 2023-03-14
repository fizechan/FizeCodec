<?php

namespace Tests;

use Fize\Codec\Base64;
use PHPUnit\Framework\TestCase;

class TestBase64 extends TestCase
{

    public function testEncode()
    {
        $decode = '1234561';
        $this->assertEquals('MTIzNDU2MQ==', Base64::encode($decode));
    }

    public function testDecode()
    {
        $encode = 'MTIzNDU2MQ==';
        $this->assertEquals('1234561', Base64::decode($encode));
    }

    public function testUrlEncode()
    {
        $decode = 'Hello World';
        $this->assertEquals('SGVsbG8gV29ybGQ', Base64::urlEncode($decode));
        $data = '2023-02-01 11:12:23';
        $estr = Base64::urlEncode($data);
        var_dump($estr);
    }

    public function testUrlDecode()
    {
        $encode = 'SGVsbG8gV29ybGQ';
        $this->assertEquals('Hello World', Base64::urlDecode($encode));
    }
}
