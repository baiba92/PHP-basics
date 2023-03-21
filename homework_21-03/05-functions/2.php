<?php
/*
Create a function that accepts 2 integer arguments.
First argument is a base value and the second one is a value it's been multiplied by.
For example, given arguments 10 and 5 prints out 50
*/

function multiply(int $number1, int $number2): void {
    echo $number1 * $number2;
}

multiply(4, 5);