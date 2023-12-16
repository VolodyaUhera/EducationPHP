<?php

function processNumbers(array $numbers, callable $operation)
{
    $result = [];

    foreach ($numbers as $number) {
        $result[] = $operation($number);
    }

    return $result;
}

$doubleClosure = function ($x) {
    return $x * 2;
};

$squareClosure = function ($x) {
    return $x * $x;
};

$numbers = [1, 2, 3, 4, 5];

echo "<pre>";
print_r (processNumbers($numbers, $doubleClosure));
echo "<br>";
print_r (processNumbers($numbers, $squareClosure));

