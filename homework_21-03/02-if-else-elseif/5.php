<?php
// Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
// Range should be stored within the 2 separated variables $y and $z.

$y = 5;
$z = 15;

// $number = 50;
$number = readline('Enter number: ');

if ($number >= $y && $number <= $z) {
    echo 'Correct!';
}