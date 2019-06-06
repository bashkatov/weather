# weather
Get weather info from DarkSky API

## Installation
```bash
composer require bashkatov/weather
```

## Usage
```php
use bashkatov\weather\Weather;

$latitude  = 44.605134;
$longitude = 33.551572;
$file_type = 'json'; // json or xml

$forecast = (new Weather(DARK_SKY_API_KEY))
    ->coordinates($latitude, $longitude)
    ->units('si')
    ->type($file_type);

$forecast->download();
```
