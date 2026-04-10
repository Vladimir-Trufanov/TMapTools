<?php


use phpGPX\phpGPX;

// Загрузка GPX-файла
$gpx = new phpGPX();
$fileName=$SiteRoot.'/sibyxTrack.gpx';	
$fileName=$SiteRoot.'/myTrack.gpx';	
$file = $gpx->load($fileName);
echo $fileName.'<br>';

// Перебор треков
foreach ($file->tracks as $track)
{
  echo "Трек: ".htmlspecialchars($track->name)."<br>";
  // Вывод точек трека
  foreach ($track->segments as $segment) 
  {
    echo "сегмент:<br>";
    foreach ($segment->points as $point) 
    {
      echo "Точка: ". 
      htmlspecialchars($point->latitude) . ", " . 
      htmlspecialchars($point->longitude) . ", " . 
      htmlspecialchars($point->elevation) . ", " . 
      htmlspecialchars($point->colorline) . ", " . 
      htmlspecialchars($point->time->format('Y-m-d H:i:s'))."<br>";
    }
  }
}
