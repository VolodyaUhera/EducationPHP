<?php

$x = floor((0.1+0.7)* 10);
$y = ceil((0.1+0.7)*10);

echo $x; // 7
echo $y; // 8

$z = ceil((0.1 + 0.2) * 10);

// 0.3000000000004 * 10 = 3.0000000000004

echo $z; // 4

/////////////////

$x1 = round(0.23);
$x2 = round(1.00 - 0.77); // float never stores always some
                        // diggets in fraction you need to round it

if ($x1 == $x2) { //if "=" always return true
    echo "yes";
} else {
    echo "no";
}

echo "<br>";

$x3 = (float) ""; //if none any numbers always 0

var_dump($x3);