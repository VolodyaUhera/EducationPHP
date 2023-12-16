<?php
declare(ticks=1);
declare(strict_types=1);
/** return / declare / gotro */

function onTick() {
    echo 'Tick<br/>';
}

register_tick_function('onTick');

$i = (int)0;
$lenght = (string) 10;


while ($i < $lenght) {
    echo $i++ . '<br />';
}

function sum(int $x, int $y) {
    return $x +$y;
}

// ======================================= //

