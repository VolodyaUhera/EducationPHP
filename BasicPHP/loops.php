<?php

$i = 0;

while (true) {
    while ($i > 100) {
        break 2;
    }

    echo $i . " " . "This is $i" . "<br>";
    $i++;
}
echo $i;

do {
    $i++;
} while($i==100);

echo $i;

echo "<br>";

for ($x = 0; $x <= $i; print "$x" . "<br>", $x++){}
//for ($x = 0; $x <= $i; echo "$x", $x++){} //print це вираз а echo це функція

$user = [
    'name' => "gio",
    'name2' => "gio2",
    'name3' => ['php', "dogs", "potato"],
    'name4' => ['php', "dogs", "potato"],
];

//foreach ($user as $key => $value) {
//    echo $key . ': ';
//
//    if (is_array($value)){
//        foreach ($value as $skill) {
//            echo $skill . ' - ';
//        }
//
//
//    } else {
//        echo $value;
//    }
//
//    echo "<br>";
//}
foreach ($user as $key => $value) {
    if (is_array($value)) {
        echo "$key: " . implode(',', $value) . "<br>";
    } else {
        echo "$key: " . "$value" . "<br>";
    }
}
?>


