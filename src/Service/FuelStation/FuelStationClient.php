<?php
namespace Fuel\Service\FuelStation;

use GuzzleHttp\ClientInterface;


class FuelStationClient {
    private $httpClient;

    public function __construct(ClientInterface $httpClient) {
        $this->httpClient = $httpClient;
    }

    public function fetchStation($viewbox) {
        return $this->httpClient->request('GET', 'https://')->getBody();
    }
}