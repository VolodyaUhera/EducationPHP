<?php

function array_handler(array $array, callable $callable){
    $filteredArray = [];

    foreach ( $array as $item ) {
        if ($callable($item)) {
            $filteredArray[] = $item;
        }
    }

    return $filteredArray;
}

//function array_handler2 (array &$array, callable $callable) {
//    foreach ( $array as $item) {
//        if ($callable($item)) {
//            $array[] = $item;
//        }
//    }
//}

$filterEvenNumbers = function ($number) {
    if (is_numeric($number)){
        return $number % 2 === 0;
    }

    return false;
};

function array_walk2 (&$value) {
    if (is_numeric($value)){
        $value *= 2;
    } else {
        $value = null;
    }

}

$items = [1,'asd',2,3,4,'ban','cat'];

$resultOfEvenNumbers = array_handler($items, $filterEvenNumbers);
echo "парні числа: " . implode(', ', $resultOfEvenNumbers);

array_walk($items, 'array_walk2');

$items = array_values(array_filter($items));
echo "<pre>";
print_r($items);
