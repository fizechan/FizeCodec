<?php
require_once "../../vendor/autoload.php";

use Fize\Codec\XML;

$array = [
    'id' => 123456,
    'name' => '<br/>陈峰展<br/>',
    'value' => [
        'sex' => true,
        'age' => '29',
        'score' => [89, 60, 78, 45, 66]
    ]
];

$string = XML::encode($array);
$array = XML::decode($string);
var_dump($array);