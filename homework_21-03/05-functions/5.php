<?php declare(strict_types=1);
/*
Create a 2D associative array in 2nd dimension with fruits and their weight.
Create a function that determines if fruit has weight over 10kg.
Create a secondary array with shipping costs per weight. Meaning that you can say that over 10 kg shipping costs are 2 euros,
otherwise its 1 euro. Using foreach loop print out the values of the fruits and how much it would cost to ship this product.
*/

function makeFruit(string $name, float $weight): object {
    $fruit = new stdClass();
    $fruit->name = $name;
    $fruit->weight = $weight;
    return $fruit;
}

$apples = makeFruit("Apples", 1.2);
$watermelons = makeFruit("Watermelons", 15.4);
$oranges = makeFruit("Oranges", 8);
$bananas = makeFruit("Bananas", 11);

$fruits = [
    $apples,
    $watermelons,
    $oranges,
    $bananas
];

function weightsOverTen(float $weight): bool {
    if ($weight > 10) {
        return true;
    }
    return false;
}

$shippingCosts = [
    "Over 10 kg" => 2,
    "Under 10 kg" => 1
];

foreach ($fruits as $key => $fruit) {
    if (weightsOverTen($fruit->weight)) {
        echo "Shipping {$fruit->name} (weight {$fruit->weight} kg) cost {$shippingCosts["Over 10 kg"]} euros.\n";
    } else {
        echo "Shipping {$fruit->name} (weight {$fruit->weight} kg) cost {$shippingCosts["Under 10 kg"]} euros.\n";
    }
}

