<?php
require_once 'WeatherApiClientInterface.php';
class OpenWeatherMapClient implements WeatherApiClientInterface
{
    public function getForecast($city)
    {
        return 'it is raining in ' . $city;
    }
}