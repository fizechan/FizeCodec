<?php
require_once "../../vendor/autoload.php";

use Fize\Codec\Json;

$array = [
    'errcode' => 0,
    'errmsg' => 'for 测试！~'
];
$json = Json::encode($array);
var_dump($json);