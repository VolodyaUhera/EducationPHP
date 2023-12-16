<?php


/** variable, anonymous & arrow functions */

function sum(int|float ...$numbers): int|float {
    return array_sum($numbers);
}

$x = 'sum'; //variable function

echo $x(1,23,4);

echo "<br>";

if (is_callable($x)) {
    echo $x(1,23,4);
} else {
    echo "Not callable";
}

$x1 = 1;

$sum1 = function (int|float ...$numbers) use($x1): int|float {
    echo "<br>" . "$x1";

    return array_sum($numbers);
};

echo "<br>" . $sum1 (1,23,4);


$sum3 = function (callable $callback, int|float ...$numbers): int|float {
    return $callback(array_sum($numbers));
};

function foo ($element) {
    return $element * 2;
}

echo "<br>" . $sum3("foo",1,23,4);