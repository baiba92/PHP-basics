<?php
/*
Create a non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
Create a for loop that iterates non-associative array using php built-in function that determines count of elements in the array.
Create a function that doubles the integer number. Within the loop using php built-in function
print out the double of the number value (using your custom function).
*/

$elements = [8, 89, -1, 6.66, 'hello'];

function doubleInteger(int $number): void {
    echo $number * 2;
}

for ($i = 0; $i < count($elements); $i++) {
    if (is_int($elements[$i])) {
        echo doubleInteger($elements[$i]) . "\n";
    } else {
        echo $elements[$i] . "\n";
    }
}

