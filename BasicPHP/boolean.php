<?php

$x = (boolean) -1; // '' , -0, 0, 0.0, -0.0, [],  => false
$y = (boolean) 0; // else true

echo $x . $y;

echo "<br>";

var_dump($x);
var_dump($y);