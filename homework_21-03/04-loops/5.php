<?php
// Create an associative array with objects of multiple persons.
// Each person should have a name, surname, age and birthday.
// Using loop (by your choice) print out every person's personal data.

$person1 = new stdClass();
$person1->name = "Jake";
$person1->surname = "Blake";
$person1->age = 24;
$person1->birthday = "February 3rd";

$person2 = new stdClass();
$person2->name = "Susan";
$person2->surname = "Dusan";
$person2->age = 35;
$person2->birthday = "December 14th";

$person3 = new stdClass();
$person3->name = "Tim";
$person3->surname = "Fim";
$person3->age = 28;
$person3->birthday = "August 10th";

$persons = [
    'person1' => $person1,
    'person2' => $person2,
    'person3' => $person3,
];

foreach ($persons as $key => $person) {
    echo "Name: $person->name\nSurname: $person->surname\nAge: $person->age\nBirthday: $person->birthday\n\n";
}


