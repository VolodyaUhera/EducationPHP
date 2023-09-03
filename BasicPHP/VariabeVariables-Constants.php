<?php

define('STATUS_PAID', 'PAID');

$status =  defined('STATUS_PAID');

//echo "<br>";

const BRUH = 'True';

//const defines constants at compile time,
// whereas define defines them at run time

echo STATUS_PAID;

echo "<br>";

echo "Status: $status";

//============

const  STATUS_PAID_2 = 'PAID';

echo "<br>";

echo STATUS_PAID_2;

echo "<br>";

//Variable Variable

$foo = "Bar";

$$foo = 'Baz';

echo "<br>";

echo $foo, $Bar;
echo $foo, $$foo;
