<?php declare(strict_types=1);
/*
Imagine you own a gun store. Only certain guns can be purchased with license types.
Create an object (person) that will be the requester to purchase a gun (object) Person object has a name, valid licenses (multiple) & cash.
Guns are objects stored within an array. Each gun has license letter, price & name.
Using PHP built-in functions determine if the requester (person) can buy a gun from the store.
*/

$person = new stdClass();
$person->name = 'John Gunner';
$person->cash = 2000;
$person->licenses = ['B', 'D', 'H', 'M'];

function createGun(string $name, int $price, string $license): object {
    $gun = new stdClass();
    $gun->name = $name;
    $gun->price = $price;
    $gun->license = $license;
    return $gun;
}

$rifle = createGun('Alexander Arms R-17', 2100, 'D');
$pistol = createGun('Morini MOR-162MI', 1900, 'B');
$crossbow = createGun('Excalibur Assassin 400 TD', 2800, 'M');
$handgun = createGun('Glock G20 GEN 4', 590, 'H');
$knife = createGun('Fox-N-Hound 120 Bowie Fixed Blade', 140, 'M');
$bazooka = createGun('KOTOBUKIYA MSG', 8000, 'R');

$guns = [
    'rifle' => $rifle,
    'pistol' => $pistol,
    'crossbow' => $crossbow,
    'handgun' => $handgun,
    'knife' => $knife,
    'bazooka' => $bazooka
];

echo "___________________________\n     GUN STORE \"CHAMP\"\n___________________________\n\n";

$licenses = implode(", ", $person->licenses);
echo "Welcome, $person->name! ($person->cash $, licenses $licenses)\n\n";

echo "OUR AVAILABLE ITEMS:\n";
foreach ($guns as $key => $gun) {
    echo "$key : $gun->name | $ $gun->price | license '$gun->license'\n";
}
echo "\n";

$selection = readline('Make your choice (for example, rifle) >> ');
$selectedGun = $guns[$selection];

if (!array_key_exists($selection, $guns)) {
    echo "GUN NOT FOUND";
    exit;
}
if (!in_array($selectedGun->license, $person->licenses)) {
    echo "INVALID LICENSE";
    exit;
}
if ($selectedGun->price > $person->cash) {
    echo "NOT ENOUGH CASH";
    exit;
}

echo "\n$person->name, you bought\n$selection $selectedGun->name.\nGreat choice!\n";
$person->cash -= $selectedGun->price;
echo "Cash left: $person->cash $.";
unset($guns[$selection]);

