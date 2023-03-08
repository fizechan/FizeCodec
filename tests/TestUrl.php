<?php

namespace Tests;

use Fize\Codec\Url;
use PHPUnit\Framework\TestCase;

class TestUrl extends TestCase
{

    public function testParse()
    {
        $url = 'https://www.baidu.com/dir1/test.php?val1=1&val2=2&val3=3';
        $paramas = Url::parse($url);
        var_dump($paramas);
        self::assertIsArray($paramas);

        $scheme = Url::parse($url, PHP_URL_SCHEME);
        var_dump($scheme);
        self::assertNotEmpty($scheme);
    }

    public function testRawEncode()
    {
        $url = 'https://www.baidu.com?a=search&k=eclipse';
        $encode1 = Url::rawEncode($url);
        var_dump($encode1);
        $encode2 = Url::encode($url);
        var_dump($encode2);
        self::assertEquals($encode1, $encode2);

        $uri = '在处理空 格  时这两个方法有不同';
        $encode3 = Url::rawEncode($uri);
        var_dump($encode3);
        $encode4 = Url::encode($uri);
        var_dump($encode4);
        self::assertNotEquals($encode3, $encode4);
    }

    public function testRawDecode()
    {
        //空格解析成%20时，rawDecode、decode结果一致
        $url1 = '%E5%9C%A8%E5%A4%84%E7%90%86%E7%A9%BA%20%E6%A0%BC%20%20%E6%97%B6%E8%BF%99%E4%B8%A4%E4%B8%AA%E6%96%B9%E6%B3%95%E6%9C%89%E4%B8%8D%E5%90%8C';
        $decode1 = Url::rawDecode($url1);
        var_dump($decode1);
        $decode2 = Url::decode($url1);
        var_dump($decode2);
        self::assertEquals($decode1, $decode2);

        //空格解析成+时，rawDecode、decode结果不一致
        $url2 = '%E5%9C%A8%E5%A4%84%E7%90%86%E7%A9%BA+%E6%A0%BC++%E6%97%B6%E8%BF%99%E4%B8%A4%E4%B8%AA%E6%96%B9%E6%B3%95%E6%9C%89%E4%B8%8D%E5%90%8C';
        $decode3 = Url::rawDecode($url2);
        var_dump($decode3);
        $decode4 = Url::decode($url2);
        var_dump($decode4);
        self::assertEquals($decode1, $decode2);
    }

    public function testEncode()
    {
        $url = 'https://www.baidu.com?a=search&k=eclipse';
        $encode1 = Url::rawEncode($url);
        var_dump($encode1);
        $encode2 = Url::encode($url);
        var_dump($encode2);
        self::assertEquals($encode1, $encode2);

        $uri = '在处理空 格  时这两个方法有不同';
        $encode3 = Url::rawEncode($uri);
        var_dump($encode3);
        $encode4 = Url::encode($uri);
        var_dump($encode4);
        self::assertNotEquals($encode3, $encode4);
    }

    public function testDecode()
    {
        //空格解析成%20时，rawDecode、decode结果一致
        $url1 = '%E5%9C%A8%E5%A4%84%E7%90%86%E7%A9%BA%20%E6%A0%BC%20%20%E6%97%B6%E8%BF%99%E4%B8%A4%E4%B8%AA%E6%96%B9%E6%B3%95%E6%9C%89%E4%B8%8D%E5%90%8C';
        $decode1 = Url::rawDecode($url1);
        var_dump($decode1);
        $decode2 = Url::decode($url1);
        var_dump($decode2);
        self::assertEquals($decode1, $decode2);

        //空格解析成+时，rawDecode、decode结果不一致
        $url2 = '%E5%9C%A8%E5%A4%84%E7%90%86%E7%A9%BA+%E6%A0%BC++%E6%97%B6%E8%BF%99%E4%B8%A4%E4%B8%AA%E6%96%B9%E6%B3%95%E6%9C%89%E4%B8%8D%E5%90%8C';
        $decode3 = Url::rawDecode($url2);
        var_dump($decode3);
        $decode4 = Url::decode($url2);
        var_dump($decode4);
        self::assertEquals($decode1, $decode2);
    }
}
