<?php

declare(strict_types=1);
/** functions */

function foo() {
    echo "hello world";
}

function foo2(): int {
    return 1;
}

function foo3(): void {
    return;
}

function foo4(): ?int {
    return 1;
}

function foo5(): int|float|string {
    return 1;
}

function foo6(): mixed {
    return null;
}
//foo();
//echo foo2();

var_dump(foo1());
var_dump(foo2());
var_dump(foo3());
var_dump(foo4());
var_dump(foo5());
var_dump(foo6());
