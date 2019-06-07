# weather
Get weather info from DarkSky API

## Installation
Add this repository to your composer.json: 

```json
"repositories": [
    {
        "type": "git",
        "url": "https://github.com/bashkatov/weather.git"
    }
]
```

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

try {
    $forecast->download();
} catch(FileTypeException $e) {
    echo $e->getMessage();
}
```
