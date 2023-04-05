<?php

echo 'KNOW - THE - WEATHER' . "\n";
echo '--------------------' . "\n";
$input = readline('Enter city and country (e.g. Riga, Latvia): ');
$cityCountry = explode(', ', $input);
$cityName = preg_replace('/\s/', '-', $cityCountry[0]);
$country = $cityCountry[1];

$countries = json_decode(file_get_contents("http://country.io/names.json"), true);
$countryCode = array_search($country, $countries);

$apiKey = '8c79142f660b68e2cf85dcffc6dd90fc';

$city = "http://api.openweathermap.org/geo/1.0/direct?q=$cityName,$countryCode&limit=1&appid=$apiKey";
$cityData = json_decode(file_get_contents($city));

$lat = $cityData[0]->lat;
$lon = $cityData[0]->lon;

$weatherResponse = "http://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$lon&appid=$apiKey&units=metric";
$weatherData = json_decode(file_get_contents($weatherResponse));

echo "\n";
echo 'Weather in ' . $cityCountry[0] . ', ' . $country . " ($countryCode):" . "\n";
echo 'Description: ' . $weatherData->weather[0]->description . "\n";
echo 'Temperature: ' . $weatherData->main->temp . " °C\n";
echo 'Temperature (feels-like): ' . $weatherData->main->feels_like . " °C\n";
echo 'Wind: ' . $weatherData->wind->speed . ' m/s, ' . windCardinal($weatherData->wind->deg) . "\n";
echo 'Clouds: ' . $weatherData->clouds->all . " %\n";
echo 'Humidity: ' . $weatherData->main->humidity . " %\n";
if (property_exists($weatherData, 'rain')) {
    echo 'Precipitation: ' . get_object_vars($weatherData->rain)["1h"] . " mm\n";
} elseif (property_exists($weatherData, 'snow')) {
    echo 'Precipitation: ' . get_object_vars($weatherData->snow)["1h"] . " mm\n";
}
echo 'Date, time: ' . gmdate("d-m-Y H:i:s", time() + date($weatherData->timezone));

function windCardinal($item)
{
    $direction[] = "N";
    $direction[] = "N/NE";
    $direction[] = "NE";
    $direction[] = "E/NE";
    $direction[] = "E";
    $direction[] = "E/SE";
    $direction[] = "SE";
    $direction[] = "S/SE";
    $direction[] = "S";
    $direction[] = "S/SW";
    $direction[] = "SW";
    $direction[] = "W/SW";
    $direction[] = "W";
    $direction[] = "W/NW";
    $direction[] = "NW";
    $direction[] = "N/NW";
    $direction[] = "N";
    return $direction[round($item * 16 / 360)];
}