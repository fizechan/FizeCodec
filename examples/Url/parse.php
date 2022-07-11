<?php
require_once "../../vendor/autoload.php";

use Fize\Crypt\Url;

$url = 'https://www.baidu.com/dir1/test.php?val1=1&val2=2&val3=3';
$paramas = Url::parse($url);
var_dump($paramas);

$scheme = Url::parse($url, PHP_URL_SCHEME);
var_dump($scheme);