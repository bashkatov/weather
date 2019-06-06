<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 19.6.6
 * Time: 14:24
 */

namespace bashkatov\weather\Downloads;

use Apfelbox\FileDownload\FileDownload;
use bashkatov\weather\Interfaces\Downloadable;

class DownloadJson implements Downloadable
{
    public function download($forecast)
    {
        $data = [
            'time'                => $forecast->time,
            'temperature'         => $forecast->temperature,
            'windBearing'         => $forecast->windBearing,
            'windSpeed'           => $forecast->windSpeed,
            'summary'             => $forecast->summary,
            'icon'                => $forecast->icon,
            'apparentTemperature' => $forecast->apparentTemperature,
            'dewPoint'            => $forecast->dewPoint,
            'humidity'            => $forecast->humidity,
            'pressure'            => $forecast->pressure,
            'windGust'            => $forecast->windGust,
            'cloudCover'          => $forecast->cloudCover,
            'uvIndex'             => $forecast->uvIndex,
            'visibility'          => $forecast->visibility,
            'ozone'               => $forecast->ozone,
        ];

        $json = json_encode($data);

        $fileDownload = FileDownload::createFromString($json);
        $fileDownload->sendDownload("weather.json");
    }
}