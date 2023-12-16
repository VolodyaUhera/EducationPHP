<?php

/** Date & Time*/

$currentTime = time();

echo  $currentTime . "<br>";

echo $currentTime + 5 * 24 * 60 * 60 . "</br>";

echo $currentTime- 60 * 60 *24 . "<br>";

echo date('md/d/y H:i') . "<br>";

echo date('m/d/Y q:ia') . "<br>";

echo date('m/d/Y q:ia',  $currentTime- 60 * 60 *24) . "<br>";

$time22 = date('d/m/y H:i',mktime(hour: 18 ,year: 2023));

$timestamp = date(mktime(hour: 12, minute: 30, second: 45, month: 6, day: 15, year: 2023));
echo date("Y-m-d H:i:s", $timestamp) . "<br>";
echo $time22 . "<br>";

echo date("Y-m-d H:i:s", strtotime('second friday of January')) . "<br>";
$date =  date("Y-m-d H:i:s", strtotime('second friday of January')) . "<br>";

echo "<pre>";
var_dump(date_parse($date));
echo "</pre>";

$date = date_parse($date);

//echo "<pre>";
foreach ( $date as $x => $y) {
    if (!is_array($y)) {
        $forprint =  "index: ". $x .'<br>'. "Value: ".  $y . "<br>";
        print_r($forprint);
    }
}
