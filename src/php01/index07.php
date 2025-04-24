<?php

function addNumber($a,$b) {
    $add=$a+$b;
    return $add;
}
$total=addNumber(2,3);
print $total;
echo "<br>";

function judge($score1,$score2,$score3) {
    $total=$score1+$score2+$score3;
    if ($total>210) {
        echo $score . "点なので合格です";
    } else {
        echo "210点以下のため、不合格です";
    }
} 
echo (judge(80,50,70)); 
echo "<br>";

function triangle($height, $base) {
    $result = $height * $bese /2;
    return "面積は".$result."です。";
}
echo triangle(60,100);
echo "<br>";

function square($height, $base) {
    $result = $height * $base;
    return "面積は" . $result . "です。";
}
echo square (30,50);
echo "<br>";

function trapezoid($upperbase, $lowerbase, $height) {
    $result = (($upperbase + $lowerbase)/2) * $height;
    return "面積は" . $result . "です。";
}
echo trapezoid(7,3,5);
