<?php

namespace Tests;


use Fize\Codec\UTF8;
use PHPUnit\Framework\TestCase;

class TestUTF8 extends TestCase
{

    public function testEncode()
    {
        $str = '123456你好！';
        $str = UTF8::encode($str);
        var_dump($str);
        self::assertIsString($str);
    }

    public function testDecode()
    {
        $str0 = '123456你好！';
        $str1 = UTF8::encode($str0);
        var_dump($str1);
        $str2 = UTF8::decode($str1);
        var_dump($str2);
        self::assertEquals($str0, $str2);
    }
}
