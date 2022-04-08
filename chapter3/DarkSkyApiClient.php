<?php

require_once 'WeatherApiClientInterface.php';
class DarkSkyApiClient implements WeatherApiClientInterface
{        
    public function getForecast($city)
    {
        return 'It is raining in ' . $city;
    }
    
}