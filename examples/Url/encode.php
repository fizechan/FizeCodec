<?php
require_once "../../vendor/autoload.php";

use Fize\Codec\Url;

$url = 'https://www.baidu.com?a=search&k=eclipse';
$encode1 = Url::rawEncode($url);
var_dump($encode1);
$encode2 = Url::encode($url);
var_dump($encode2);

$uri = '在处理空 格  时这两个方法有不同';
$encode3 = Url::rawEncode($uri);
var_dump($encode3);
$encode4 = Url::encode($uri);
var_dump($encode4);