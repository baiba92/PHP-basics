<?php declare(strict_types=1);
/*
Create a person object with name, surname and age.
Create a function that will determine if the person has reached 18 years of age.
Print out if the person has reached age of 18 or not.
*/

$person = new stdClass();
$person->name = 'Tony';
$person->surname = 'Dandelion';
$person->age = 17;

function isEighteen(int $age): void {
    if ($age >= 18) {
        echo 'Person is at least 18 years old.';
    } else {
        echo 'Person has not reached the age of 18.';
    }
}

isEighteen($person->age);