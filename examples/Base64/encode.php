<?php
require_once "../../vendor/autoload.php";

use Fize\Codec\Base64;

$str = '123456';
$enstr = Base64::encode($str);
var_dump($enstr);  // MTIzNDU2