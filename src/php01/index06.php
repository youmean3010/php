<?php

for ($i=1; $i<=5; $i++) {
    echo $i*2 . "<br>";
}


$i=0;

while ($i<3) {
    echo "i=" . $i . "<br>";
    $i+=1;
}

$count=0;

while ($count<20) {
    $count+=1;
    echo "$count" . "<br>";
}

$i=0;

while ($i<10){
    if($i==5) {
        break;
   }
    echo $i . "<br>";
    $i++;
}
echo "---------------------------------------" . "<br>";


$count=0; 
while ($count<100) {
    if ($count==20) {
        break;
    }  
    if ($count%3==0) {
       $count+=1;
       continue;
    } 
    echo $count."<br>";
    $count++;
}

$i=0;
do {
    echo $i."<br>";
    $i++;
} while($i<5);

echo "Q"."<br>";

$num=0;

do {
    echo "num=$num"."<br>";
    $num++;
} while ($num<3);

$Fizz="Fizz";
$Buzz="Buzz";
$FizzBuzz="FizzBuzz";

for ($i=1; $i<=50; $i++) {
    if ($i%15==0) {
        echo $FizzBuzz."<br>";
    } 
    else if ($i%5==0) {
        echo $Buzz."<br>";
    }
    else if ($i%3==0) {
        echo $Fizz."<br>";
    }
    else {
        echo $i."<br>";
    }
}

echo "<br>";
Echo "二重ループ";
echo "<br>";

for ($i=1; $i<=6; $i++) {
    for ($j=1; $j<=6; $j++) {
        echo "●";
    }
    echo $i . "<br>";
}


$Y=10;
While ($Y>=1) {
    if($Y%2==0) {
        echo $Y."<br>";
        $Y--;
    }
    else {
        $Y--;
        continue;
    }
    
}

echo "・5以上100以下の5の倍数を出力するプログラムを作る。       出力順は(降順)"."<br>";
$num=100;
while ($num>=5) {
    if ($num%5==0) {
        echo $num."<br>";
        $num--;
    } else {
        $num--;
        continue;
    }
}
