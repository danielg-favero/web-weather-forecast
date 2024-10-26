<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Promise\Utils;

class ZipcodeService
{
    protected $baseUrl;
    protected $httpClient;

    function __construct($httpClient, $baseUrl) {
        $this->baseUrl = $baseUrl;
        $this->httpClient = $httpClient;
    }

    public function execute($zipcode) {
        $response = $this->httpClient->get("{$this->baseUrl}/{$zipcode}/json");

        return json_decode($response->getBody());
    }
}
