<?php
// Given variable (int) 50, determine if it's in the range of 1 and 100.

$number = readline('Enter number: ');

if ($number >= 1 && $number <= 100) {
    echo "In range";
}