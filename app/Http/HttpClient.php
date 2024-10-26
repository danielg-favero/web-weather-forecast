<?php

namespace App\Http;

use GuzzleHttp\Client;

class HttpClient
{
    public $client;

    function __construct() {
        $this->client = new Client();
    }
}
