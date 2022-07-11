<?php
require_once "../../vendor/autoload.php";

use Fize\Crypt\UTF8;

$str0 = '123456你好！';
$str1 = UTF8::encode($str0);
var_dump($str1);
$str2 = UTF8::decode($str1);
var_dump($str2);