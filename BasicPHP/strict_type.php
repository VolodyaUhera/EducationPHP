<?php

declare(strict_types=1);

function sum(int $x, int $y): int
{
    return $x + $y;
}

$sum = sum(2,3);

echo $sum . '<br />';

//var_dump($sum);

$x = (int) '5'; //cast string to integer;

echo "<br>";

echo 'THis is var_dump of $x: ' . var_dump($x);