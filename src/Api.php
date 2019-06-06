<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 19.6.6
 * Time: 14:51
 */

namespace bashkatov\Weather;

use GuzzleHttp\Client as Guzzle;

class Api
{
    protected $client;

    protected $url;

    protected $apiUrl;

    public function __construct()
    {
        $this->apiUrl = 'https://api.darksky.net/forecast/';
        $this->client = new Guzzle();
    }

    public function weatherRequest(Settings $settings)
    {
        $url = $this->apiUrl . "{$settings->getApiKey()}/{$settings->getLatitude()},{$settings->getLongitude()}";
        return $this->client->request('GET', $url);
    }
}