<?php

require 'helpers.php';

$items = ['a' => 1, 'b' => 2, 'c' => 3 ];

//array_chunk
prettyArray($items);

prettyArray(array_chunk($items, 2));

prettyArray($items);

prettyArray($items + ['1' => 2]);

prettyArray($items);

//array_combine

$array1 = ['a', 'b', 'c'];
$array2 = [5,10,15];

prettyArray(array_combine($array1,$array2));
prettyArray(array_combine($array2,$array1));

//array_filter

$array3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$even = array_filter($array3,fn($number) => $number % 2 === 0);

prettyArray($even);

$even = array_values($even);

prettyArray($even);

$array4 = [1, 2, true, 4, false, 6, [], 0.0, 9, null];
$even2 = array_filter($array4);

$even2 = array_values($even2);

prettyArray($even2);

//array_keys

$array5 = array_combine($array1, $array2);

prettyArray($array5);

$keys = array_keys($array5);

prettyArray($keys);

//array_map

$array6 = [1, 2, 3, 4, 5, 6];

prettyArray(array_map(array: $array6, callback:  fn($k) => $k * 2));

echo 'array6';
prettyArray($array6);

//array_merge

$array7 = [1, 2, 3];
$array8 = [4, 5, 6];
$array9 = [7, 8, 9];

$merged = array_merge($array7, $array8, $array9);

prettyArray($merged);

//array_reduce

$invoiceItems = [
    ['price' => 9.99, 'qty' => 3, 'desc' => 'Item 1'],
    ['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
    ['price' => 149, 'qty' => 1, 'desc'=> 'Item 3'],
    ['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
    ['price' => 4.99, 'qty' => 4, 'desc' => 'Item-5']
];

$total = array_reduce(
    $invoiceItems,
    fn($sum, $item) => $sum + $item['qty'] * $item['price']
);

echo $total;

//array_search

$array10 = [
    ['price' => 9.99, 'qty' => 3, 'desc' => 'Item 1'],
    ['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
    ['price' => 149, 'qty' => 1, 'desc'=> 'Item 3'],
    ['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
    ['price' => 4.99, 'qty' => 4, 'desc' => 'Item-5']
];

$qtys = array_column($array10, 'qty');
prettyArray($qtys);
$key2 = array_search(3, $qtys);

var_dump($key2);

//array_diff

$array11 = [
    'price' => 149, 'qty' => 1, 'desc'=> 'Item 3'
];
$array12 = [
    'price' => 9.99, 'qty' => 3, 'desc' => 'Item 3'
];
$array13 = [
    'price' => 4.99, 'qty1' => 1, 'desc' => 'Item-5'
];

prettyArray(array_diff($array11, $array12, $array13));
prettyArray(array_diff_assoc($array11, $array12, $array13));
