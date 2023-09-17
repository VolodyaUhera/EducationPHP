<?php

// ARRAYS

$programmingLamguages = ['PHP', 'Pyhton', 'Java'];
$programmingLamguages2 = array('PHP', 'Pyhton', 'Java');

echo $programmingLamguages[0];

echo '<br>';

var_dump(isset($programmingLamguages[1]));

echo '<br>';

$programmingLamguages[1] = 'C++';
$programmingLamguages[] = 'JS';

echo "<pre>";
print_r( $programmingLamguages );
echo "</pre>";

echo '<br>';

echo  count($programmingLamguages);

array_push($programmingLamguages, 'GO', 'Kotlin');

echo "<pre>";
print_r( $programmingLamguages );
echo "</pre>";


$programmingLanguages = [
        'php' => '8.0',
        'python' => '3.9'
    ];

echo "<pre>";
print_r( $programmingLanguages );
echo "</pre>";


$array = ['a' => 1, 'b' => null];

var_dump(array_key_exists('b', $array)); //chack if exist

var_dump(isset($array['b']));