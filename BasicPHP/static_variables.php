<?php

/** variable scopes - static variables */

function getValue() {
    static $value = null;

    if ($value == null) {
        $value = someVeryExpensiveFunction();
    }
    return $value;
}

function someVeryExpensiveFunction(){
    sleep(2);

    echo "static";

    return 10;
}

echo getValue() . '<br />';
echo getValue() . '<br />';
echo getValue() . '<br />';