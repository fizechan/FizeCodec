<?php

namespace Tests;

use Fize\Codec\UU;
use PHPUnit\Framework\TestCase;

class TestUU extends TestCase
{

    public function testEncode()
    {
        $str = "你好，我是陈峰展！";
        $suu = UU::encode($str);
        var_dump($suu);
        self::assertIsString($suu);
    }

    public function testDecode()
    {
        $suu = ";Y+V@Y:6][[R,YHB1YIBOZ9F(Y;.PY;&5[[R!
`
";
        $str = UU::decode($suu);
        var_dump($str);
        self::assertEquals("你好，我是陈峰展！", $str);
    }
}
