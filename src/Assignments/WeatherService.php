<?php
namespace Demo\App\Assignments;

class WeatherService
{
    private $httpClient;

    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * Fetches the current temperature for the given city.
     *
     * @param string $city The name of the city.
     * @return float The current temperature in the city.
     */
    public function getTemperatureForCity(string $city): null|string|float
    {
        // URL to the external weather API
        $url = $this->buildUrl($city);
        // Make a GET request to the API
        try {
            $response = $this->httpClient->get($url);
        } catch (\Exception $e) {
            echo ' ', printRed($e->getMessage()) . \PHP_EOL;
            return null;
        }


        // Decode the JSON response
        $data = json_decode($response, true);

        // Extract and return the temperature
        return $data['current']['temp_c'] ?? null;
    }

    public function buildUrl($city)
    {
        return sprintf('http://api.weatherapi.com/v1/current.json?aqi=no&key=%s&q=%s', $_ENV['WEATHER_API_KEY'] ?? null, urlencode($city));
    }

    public function printWeatherCard($city, $temperature)
    {
        echo printGreen(sprintf(" ******** Weather in %s ********\n", $city));
        echo printYellow(sprintf("|-----------------------------------|\n"));
        echo printGreen(sprintf(" City\t\t|\tTemperature\n"));
        echo printYellow(sprintf("|-----------------------------------|\n"));
        echo sprintf(" %s\t\t|\t%s°C\n", printRed($city), $temperature);
        echo printYellow(sprintf("|-----------------------------------|\n"));
    }
}