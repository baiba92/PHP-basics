<?php
// By your choice, create condition with 3 checks.
// For example, if value is greater than X, less than Y and is an even number.

$value = readline('Enter number: ');
$isEven = $value % 2;

if ($value > 0 && $value <= 20 && $isEven === 0 ) {
    echo 'We have winning number!';
}