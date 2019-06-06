<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 19.6.6
 * Time: 14:36
 */

namespace bashkatov\weather;

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

    /**
     * @var string
     */
    protected $units;

    /**
     * @var string
     */
    protected $file_type;

    /**
     * Set DarkSky Api Key
     *
     * @param $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set latitude
     *
     * @param $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set units type
     *
     * @param $units
     */
    public function setUnits($units)
    {
        $this->units = $units;
    }

    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Set download file type: 'json' or 'xml'
     *
     * @param $file_type
     */
    public function setFileType($file_type)
    {
        $this->file_type = $file_type;
    }

    public function getFileType()
    {
        return $this->file_type;
    }
}