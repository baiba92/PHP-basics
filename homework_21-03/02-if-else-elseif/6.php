<?php
// Create a variable $plateNumber that stores your car plate number.
// Create a switch statement that prints out that it's your car in case of your number.

// $plateNumber = 'KZ157';
$plateNumber = readline('Enter car plate number: ');

switch($plateNumber) {
    case 'KZ157':
        echo 'It is my car!';
        break;
    default:
        echo 'That is some other car.';
        break;
}