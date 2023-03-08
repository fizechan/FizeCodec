<?php
require_once "../../vendor/autoload.php";

use Fize\Codec\Base64;

$encode = 'MTIzNDU2';
$str = Base64::decode($encode);
var_dump($str);  // 123456