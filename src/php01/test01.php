<?php

echo "・5以上1000以下の4の倍数を出力する。　出力順は(降順)";
$num = 1000;
while ($num >= 5) {
    if ($num % 4 == 0) {
        echo $num . "<br>";
        $num--;
    } else if ($num % 4 != 0) {
        $num--;
        continue;
    }
}