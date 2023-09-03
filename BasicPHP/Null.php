<?php

$x = null;

echo var_dump($x) . '<br>';
echo var_dump(is_null($x)) . '<br>';
echo var_dump($x === null) . '<br>';

unset($x);

echo var_dump($x) . '<br>';

$x = null;

echo var_dump((string) $x) . '<br>' ;
echo var_dump((bool) $x) . '<br>' ;
echo var_dump((array) $x) . '<br>' ;