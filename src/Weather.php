<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 19.6.6
 * Time: 13:15
 */

namespace bashkatov\weather;

class Weather
{
    protected $types = [];

    /**
     * @var \bashkatov\weather\Settings
     */
    protected $settings;

    /**
     * @var \bashkatov\weather\Api
     */
    protected $api;

    public function __construct($apiKey, Settings $settings = null, Api $api = null)
    {
        $this->settings = !is_null($settings) ? $settings : new Settings;
        $this->api = !is_null($api) ? $api : new Api;
        $this->settings->setApiKey($apiKey);
    }

    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Set coordinates
     *
     * @param float $latitude
     * @param float $longitude
     * @return $this
     */
    public function coordinates($latitude, $longitude)
    {
        $this->settings->setLatitude($latitude);
        $this->settings->setLongitude($longitude);

        return $this;
    }

    public function weather()
    {
        return $this->api->weatherRequest($this->settings);
    }
}