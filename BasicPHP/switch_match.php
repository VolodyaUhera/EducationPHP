<?php


$paymentStatus = "1";

switch ($paymentStatus) {
    case 1:
        echo "Paid";
        break;

    case 2:
    case 3:
        echo "Decline";
        break;

    case 0:
        echo "Pending";
        break;

    default:
        echo "Unknown";
}

match ($paymentStatus) {

    1 => print "paid",
    2 => print "Payment",
    0 => print "pending",
    default => "",

};

echo $paymentStatus;

//match has strict comparison;
// switch ==
// match ===
$paymentStatusDisplay = match ($paymentStatus) {
    1 => "paid",
    2,3 => "Payment",
    0 => "pending",
    default => "Unknow issue",

};

echo $paymentStatusDisplay;