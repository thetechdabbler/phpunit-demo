<?php
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

use Demo\App\Assignments\WeatherService;

$httpClient = new \Demo\App\Assignments\HttpClient();
$weatherService = new WeatherService($httpClient);

// Get the city from the query string or use a default London
$city = $_GET['city'] ?? 'Pune';
$temperature = $weatherService->getTemperatureForCity($city);
function printYellow($string)
{
    return "\033[33m$string\033[0m";
}

function printGreen($string): string
{
    return "\033[32m$string\033[0m";
}

function printRed($string): string
{
    return "\033[31m$string\033[0m";
}

$weatherService->printWeatherCard($city, $temperature);