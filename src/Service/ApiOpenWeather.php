<?php

namespace Weatherproject\Service;

use Weatherproject\Form\CityForm;

class ApiOpenWeather
{

    public function __construct()
    {

    }

    public function getWeatherByCity($city)
    {
            $search = str_replace(' ', "%20", $city);
            $data = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=$search&units=metric&lang=fr&appid=d16d7dcb95c567985adc924667a7e2cf");
           $data = json_decode($data, true);
           return $data;


    }


}