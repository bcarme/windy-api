<?php


namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;

class ApiService
{
    const API_KEY = 'OvSHGjY452oTcNg8UAgF9jFN452jdkeW';


    public function searchCountry()
    {
        $client = HttpClient::create();
        $url = 'https://api.windy.com/api/webcams/v2/';

        $response = $client->request('GET', $url . self::API_KEY);
    }
}
