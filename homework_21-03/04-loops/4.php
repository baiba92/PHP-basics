<?php
// Create a non-associative array with integers and print out only integers that divides by 3 without any left.

$integers = [2, 3, 7, 9, 13, 16, 28, 132, 333, 457, 1278, 7898, 45566];

foreach ($integers as $integer) {
    if ($integer % 3 === 0) {
        echo $integer . "\n";
    }
}