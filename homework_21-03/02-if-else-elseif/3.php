<?php
// Given variables (string) "hello" create a condition that if the given value is "hello" then output "world".

// $value = 'hello';
$value = readline('Enter word: ');

if ($value === 'hello') {
    echo 'world';
}