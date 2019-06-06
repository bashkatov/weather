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
use SimpleXMLElement;

class DownloadXml implements Downloadable
{
    public function download($forecast)
    {
        $data = [
            'time'                => $forecast->time,
            'windSpeed'           => $forecast->windSpeed,
            'temperature'         => $forecast->temperature,
            'summary'             => $forecast->summary,
            'icon'                => $forecast->icon,
            'apparentTemperature' => $forecast->apparentTemperature,
            'dewPoint'            => $forecast->dewPoint,
            'humidity'            => $forecast->humidity,
            'pressure'            => $forecast->pressure,
            'windGust'            => $forecast->windGust,
            'windBearing'         => $forecast->windBearing,
            'cloudCover'          => $forecast->cloudCover,
            'uvIndex'             => $forecast->uvIndex,
            'visibility'          => $forecast->visibility,
            'ozone'               => $forecast->ozone,
        ];

        $xml = new SimpleXMLElement('<weather/>');
        $this->to_xml($xml, $data);

        $fileDownload = FileDownload::createFromString($xml->asXML());
        $fileDownload->sendDownload("weather.xml");
    }

    private function to_xml(SimpleXMLElement $object, array $data)
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $new_object = $object->addChild($key);
                $this->to_xml($new_object, $value);
            } else {
                // if the key is an integer, it needs text with it to actually work.
                if ($key === (int)$key) {
                    $key = "key_$key";
                }

                $object->addChild($key, $value);
            }
        }
    }
}