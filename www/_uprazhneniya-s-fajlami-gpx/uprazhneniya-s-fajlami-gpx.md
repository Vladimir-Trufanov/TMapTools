## Упражнения с файлами GPX

Для работы с GPX-файлами в PHP можно использовать несколько подходов и библиотек. Один из популярных вариантов — библиотека phpGPX, которая позволяет читать, создавать и сохранять GPX-файлы в разных форматах (XML, JSON). 

### [Sibyx: phpGPX](https://github.com/Sibyx/phpGPX)

#### [A simple PHP library for GPX import/export](https://packagist.org/packages/sibyx/phpgpx)

Установка через Composer:
```
composer require sibyx/phpgpx:1.3.0
```

#### Примеры использования:

Чтение GPX-файла и получение базовой статистики:

```
use phpGPX\phpGPX;

$gpx = new phpGPX();
$file = $gpx->load('example.gpx');

foreach ($file->tracks as $track) 
{
    // Статистика для всего трека
    $track->stats->toArray();
    foreach ($track->segments as $segment) 
    {
        // Статистика для сегмента трека
        $segment->stats->toArray();
    }
}
```

Запись в файл в разных форматах:

```
use phpGPX\phpGPX;

$gpx = new phpGPX();
$file = $gpx->load('example.gpx');

$file->save('output.gpx', phpGPX::XML_FORMAT);   // Сохраняем в XML
$file->save('output.json', phpGPX::JSON_FORMAT); // Сохраняем в JSON
```

Создание файла с нуля:

```
use phpGPX\Models\GpxFile;
use phpGPX\Models\Link;
use phpGPX\Models\Metadata;
use phpGPX\Models\Point;
use phpGPX\Models\Segment;
use phpGPX\Models\Track;

require_once '/vendor/autoload.php';

// Создаём объект GpxFile
$gpx_file = new GpxFile();

// Добавляем метаданные
$link = new Link();
$link->href = "https://sibyx.github.io/phpgpx";
$link->text = 'phpGPX Docs';

$gpx_file->metadata = new Metadata();
$gpx_file->metadata->time = new \DateTime();
$gpx_file->metadata->description = 'Мой замечательный GPX-файл, созданный с помощью библиотеки phpGPX!';

// Сохраняем в JSON
$gpx_file->save('CreatingFileFromScratchExample.json', \phpGPX\phpGPX::JSON_FORMAT);
```

### Использование simplexml_load_file

GPX-файлы представлены в XML. Для их чтения можно использовать функцию simplexml_load_file:

```
$gpx = simplexml_load_file("test.gpx");

foreach ($gpx->wpt as $pt) {
    $lat = (string) $pt['lat'];
    $lon = (string) $pt['lon'];
    $ele = (string) $pt->ele;
    $name = (string) $pt->name;
    // Дальнейшая обработка данных
}
```

Аналогичный подход можно использовать для извлечения данных из других элементов GPX (например, trk->trkseg->trkpt). 

Выбор метода зависит от конкретных задач: для сложных операций с данными лучше использовать специализированные библиотеки, а для простых случаев подойдёт simplexml_load_file.

### [Loskoderos: GPX library for PHP](https://github.com/loskoderos/gpx-php)

Устанавливается через Composer: 

```
composer require loskoderos/gpx-php:dev-master
```

**Пример чтения GPX-файла:**

```
use LosKoderos\GPX\GPXReader;

require '../vendor/autoload.php';

$reader = new GPXReader();
$gpx = $reader->readFromFile('garmin.gpx');

foreach ($gpx->routes as $route) 
{
    echo 
    sprintf("[%0.8f, %0.8f] %s",
    (float) $route->points->latitude,
    (float) $route->points->longitude,
    $route->name);
}
``` 

**Пример записи GPX-файла:**

```
use LosKoderos\GPX\GPXWriter;
use LosKoderos\GPX\Model\GPX;
use LosKoderos\GPX\Model\Track;
use LosKoderos\GPX\Model\TrackSegment;
use LosKoderos\GPX\Model\Waypoint;

require '../vendor/autoload.php';

$gpx = new GPX();
$gpx->creator = 'gpx-php';

$segment = new TrackSegment();
$waypoint = new Waypoint();
$waypoint->latitude = 50.0583;
$waypoint->longitude = 19.8006;
$waypoint->time = new \DateTime("+1 minutes");
$segment->points->add($waypoint);

$waypoint = new Waypoint();
$waypoint->latitude = 50.0584;
$waypoint->longitude = 19.8007;
$waypoint->time = new \DateTime("+2 minutes");
$segment->points->add($waypoint);

$track = new Track();
$track->segments->add($segment);

$gpx->tracks->add($track);

$writer = new GPXWriter();
echo $writer->writeToFile($gpx, 'out.gpx');
```

Также можно создать GPX, передав данные в виде массива. 

При работе с GPX-файлами важно учитывать, что GPX — это формат XML, и библиотеки обычно работают с ним через соответствующие классы и методы.
