<?php
// Create an array with integers (up to 10) and print them out using for loop.

$integers = [2, 6, 7, 8, 89, 999];

for ($i = 0; $i < count($integers); $i++) {
    echo $integers[$i] . "\n";
}