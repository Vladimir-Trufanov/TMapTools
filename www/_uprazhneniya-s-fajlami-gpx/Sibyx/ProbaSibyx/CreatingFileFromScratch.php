<?php

use phpGPX\Models\GpxFile;
use phpGPX\Models\Link;
use phpGPX\Models\Metadata;
use phpGPX\Models\Point;
use phpGPX\Models\Segment;
use phpGPX\Models\Track;

$sample_data = [
	[
		'longitude' => 34.3725032452,
		'latitude' => 61.8432667013,
		'elevation' => 0,
		'time' => new \DateTime("+ 1 MINUTE")
	],
	[
		'latitude' => 61.8439234234,
		'longitude' => 34.3724057637,
		'elevation' => 10.0,
		'time' => new \DateTime("+ 2 MINUTE")
	],
	[
		'latitude' => 61.8438809272,
		'longitude' => 34.3723446596,
		'elevation' => 42.42,
		'time' => new \DateTime("+ 3 MINUTE")
	],
	[
		'latitude' => 61.8449408188,
		'longitude' => 34.3792157248,
		'elevation' => 12,
		'time' => new \DateTime("+ 4 MINUTE")
	],
	[
		'latitude' => 61.8432667013,
		'longitude' => 34.3725032452,
		'elevation' => 0,
		'time' => new \DateTime("+ 5 MINUTE")
	]
];

// Создание образца объекта ссылки для метаданных
$link = new Link();
$link->href = "https://sibyx.github.io/phpgpx";
$link->text = 'phpGPX Docs';

// Файл Gpx содержит данные и обрабатывает сериализацию объектов
$gpx_file = new GpxFile();

// Создание образца объекта метаданных
$gpx_file->metadata = new Metadata();

// Атрибут времени всегда \DateTime object!
$gpx_file->metadata->time = new \DateTime();

// Описание GPX file
echo '<br>';
$gpx_file->metadata->description = "Небольшой трек по ботаническому саду ПетрГУ, созданный с использованием библиотеки php GPX!";

// Добавление ссылки, созданной ранее, в массив метаданных links
// Метаданные файла GPX могут содержать более одной ссылки
$gpx_file->metadata->links[] = $link;

// Создание трека
$track = new Track();

// Именование трека
$track->name = "Несколько случайных точек в логическом порядке. Входной массив должен быть уже упорядочен!";

// Тип данных, хранящихся в треке
$track->type = 'RUN';

// Источник GPS-координат
$track->source = "MySpecificGarminDevice";

// Создание сегмента трека
$segment = new Segment();

foreach ($sample_data as $sample_point)
{
	// Создание точки трека
	$point = new Point(Point::TRACKPOINT);
	$point->latitude = $sample_point['latitude'];
	$point->longitude = $sample_point['longitude'];
	$point->elevation = $sample_point['elevation'];
	$point->time = $sample_point['time'];

	$segment->points[] = $point;
}

// Добавление сегмента к сегментному массиву трека
$track->segments[] = $segment;

// Пересчет статистики на основе полученных данных
$track->recalculateStats();

// Добавление трека в файл
$gpx_file->tracks[] = $track;

// Выход GPX
$gpx_file->save('CreatingFileFromScratchExample.gpx', \phpGPX\phpGPX::XML_FORMAT);

// Сериализованные данные в формате JSON
// $gpx_file->save('CreatingFileFromScratchExample.json', \phpGPX\phpGPX::JSON_FORMAT);

// Прямой вывод GPX в браузер

//header("Content-Type: application/gpx+xml");
//header("Content-Disposition: attachment; filename=CreatingFileFromScratchExample.gpx");

echo $gpx_file->toXML()->saveXML();
echo '<br>';

exit();
