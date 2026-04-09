<?php

use phpGPX\phpGPX;

$gpx = new phpGPX();
$fileName=$SiteRoot.'/myTrack.gpx';	
$file = $gpx->load($fileName);
echo $fileName.'<br>';

echo '<pre>';
foreach ($file->tracks as $track)
{
    // Statistics for whole track
    $track->stats->toArray();
	  var_dump($track->stats->toArray());
    
    /*
    foreach ($track->segments as $segment)
    {
    	// Statistics for segment of track
    	$segment->stats->toArray();
	    var_dump($segment->stats->toArray());
    }
    */
}
echo '</pre>';

