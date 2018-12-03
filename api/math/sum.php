<?php

// :: CORS headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once("../../utils/math.php");

// :: ---

$a = $_GET['a'];
$b = $_GET['b'];

$sum = $a + $b;

http_response_code(200);
echo $sum;

?>
