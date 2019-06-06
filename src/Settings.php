<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 19.6.6
 * Time: 14:36
 */
namespace bashkatov\Weather;

class Settings
{
    /**
     * DarkSky API key
     *
     * @var string
     */
    protected $apiKey;

    /**
     * Latitude
     *
     * @var float
     */
    protected $latitude;

    /**
     * Longitude
     *
     * @var float
     */
    protected $longitude;

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }
}