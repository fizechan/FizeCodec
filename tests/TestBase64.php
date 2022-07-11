<?php

namespace Tests;

use Fize\Codec\Base64;
use PHPUnit\Framework\TestCase;

class TestBase64 extends TestCase
{

    public function testDecode()
    {
        $encode = 'MTIzNDU2';
        $this->assertEquals('123456', Base64::decode($encode));
    }

    public function testEncode()
    {
        $decode = '1234561';
        $this->assertEquals('MTIzNDU2', Base64::encode($decode));
    }
}
