<?php
require_once "../../vendor/autoload.php";

use Fize\Crypt\Json;

$array = [
    'errcode' => 0,
    'errmsg' => 'for 测试！~'
];
$json = Json::encode($array);
var_dump($json);