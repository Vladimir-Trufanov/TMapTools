<?php

$fileName=$SiteRoot.'/myTrack.gpx';	

echo '<pre>';
if (file_exists($fileName)) 
{
  $gpx = simplexml_load_file($fileName);
  print_r($gpx);
} 
else 
{
  exit('Failed to open '.$fileName);
}

$i=0;
foreach ($gpx->trk->trkseg as $seg) 
{
  //echo $i.'<br>';
  $j=0;
  foreach ($seg->trkpt as $pt) 
  {
    //echo '$j = '.$j.'<br>';
    print_r($pt);
    
    $lat = (string) $pt['lat'];
    $lon = (string) $pt['lon'];
    echo '$lat       = '.$lat.'<br>';
    echo '$lon       = '.$lon.'<br>';
    echo '$pt->time  = '.$pt->time.'<br>';
    echo '$pt->ele   = '.$pt->ele.'<br>';
    echo '$pt->color = '.$pt->color.'<br>';
    echo '<br>';
    $j++;
  }
  $i++;
}
echo '</pre>';
