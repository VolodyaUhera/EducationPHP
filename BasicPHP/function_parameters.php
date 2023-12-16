<?php

/** functions part 2 */

function foo(float|int $x, float|int $y) {
    return $x * $y;
}

echo foo(1.0,"2");

function foo2(...$numbers): int|float {
    return array_sum($numbers);
}
echo foo2(1,2,3,4,5,6);