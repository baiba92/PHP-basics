<?php declare(strict_types=1);
// Create an array of objects that uses the function of exercise 3
// but in loop printing out if the person has reached age of 18.

function createPerson(string $name, int $age): object {
    $person = new stdClass();
    $person->name = $name;
    $person->age = $age;
    return $person;
}

$person1 = createPerson("Jake", 15);
$person2 = createPerson("Susan", 35);
$person3 = createPerson("Tim", 28);

$persons = [$person1, $person2, $person3];

function isEighteen(int $age): string {
    if ($age >= 18) {
        return 'This person is at least 18 years old.';
    } else {
        return 'This person has not reached the age of 18.';
    }
}

for ($i = 0; $i < count($persons); $i++) {
    echo $persons[$i]->name . ": " . isEighteen($persons[$i]->age) . "\n";
}

