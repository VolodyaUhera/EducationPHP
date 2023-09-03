<?php

$firstName = "Will";
$secondName = "Smith";

$name = $firstName . ' ' . $secondName;

echo $name . '<br>';

echo $name[0] . '<br>';

echo $name[-1] . '<br>';

$name[1] = "I";
$name[-1] = "I";
$name[15] = "1";

echo $name . '<br>';

// Heredoc {as double cwotes}

$text = <<<TEXT
Line 1 $name
Line 2 $secondName qsqw
Line 3 $firstName
TEXT;

$text3 = <<<TEXT
<div>
    <p>Hello $firstName</p>
    <p>Hello $secondName</p>
</div>
TEXT;

echo nl2br($text) . '<br>';
echo nl2br($text3) . '<br>';

// Nowdoc {as singe cwotes}

$text2 = <<<'TEXT'
Line 1
Line 2 $name
Line 3 
TEXT;

echo nl2br($text2) . '<br>';