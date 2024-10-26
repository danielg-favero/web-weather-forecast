<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ForecastApiService
{
    protected $baseUrl;
    protected $apiKey;
    protected $httpClient;

    function __construct($httpClient, $baseUrl, $apiKey) {
        $this->baseUrl = $baseUrl;
        $this->apiKey = $apiKey;
        $this->httpClient = $httpClient;
    }

    public function execute($query) {
        $response = $this->httpClient->get($this->baseUrl, [
            'query' => [
                'access_key' => $this->apiKey,
                'query' => $query
            ]
        ]);

        return json_decode($response->getBody());
    }
}
