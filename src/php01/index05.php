<?php


$a=5;

if ($a==5) {
    echo "\$aは5です";
}

$a=7;

if ($a==5) {
    echo "<br>";
    echo "\$aは5です";
} else {
    echo "<br>";
    echo "\$aは5以外です";
}


if ($a==7) {
    echo "<br>";
    echo "\$aは7です";
} else {
    echo "<br>";
    echo "\$aは7以外です";
}

$people="Saburo";

switch ($people) {
    case"Taro";
    echo "太郎です";
    break;
    case"Jiro";
    echo "次郎です";
    break;
    case"Saburo";
    echo "三郎です";
    break;
}

$b=($a>5)? "True":"False";
echo $b;