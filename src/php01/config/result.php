<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
echo "私の名前は、" . $name . "<br>";

$course = htmlspecialchars($_POST["course"], ENT_QUOTES);
echo "ご注文の商品は、" . $course . "<br>";

$order_number = htmlspecialchars($_POST["order_number"], ENT_QUOTES);
echo "注文数は、" . $order_number . "個" . "<br>";