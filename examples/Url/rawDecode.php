<?php
require_once "../../vendor/autoload.php";

use Fize\Codec\Url;

// 空格解析成%20时，rawDecode、decode结果一致
$url1 = '%E5%9C%A8%E5%A4%84%E7%90%86%E7%A9%BA%20%E6%A0%BC%20%20%E6%97%B6%E8%BF%99%E4%B8%A4%E4%B8%AA%E6%96%B9%E6%B3%95%E6%9C%89%E4%B8%8D%E5%90%8C';
$decode1 = Url::rawDecode($url1);
var_dump($decode1);
$decode2 = Url::decode($url1);
var_dump($decode2);

// 空格解析成+时，rawDecode、decode结果不一致
$url2 = '%E5%9C%A8%E5%A4%84%E7%90%86%E7%A9%BA+%E6%A0%BC++%E6%97%B6%E8%BF%99%E4%B8%A4%E4%B8%AA%E6%96%B9%E6%B3%95%E6%9C%89%E4%B8%8D%E5%90%8C';
$decode3 = Url::rawDecode($url2);
var_dump($decode3);
$decode4 = Url::decode($url2);
var_dump($decode4);