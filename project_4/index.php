<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Current Images</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Check Out the Latest Images</h2>
  <p>Welcome, view the latest public flicker images! Click the thumbnail to view the larger image.</p>


<?php
  define('FLICKR_URL', 'http://api.flickr.com/services/feeds/photos_public.gne');
    define('NUM_IMAGES', 5);

  // Read the XML data into an object
  $xml = simplexml_load_file(FLICKR_URL);
  echo '<table><tr>';
  
    foreach ($xml->entry as $imginfo) 
    {
    $title=$imginfo->title;
    $link=$imginfo->link['href'];
    $image=str_replace("_b.jpg","_s.jpg",$imginfo->link[1]['href']);
     
          echo '<td style="vertical-align:bottom; text-align:center" width="' . (100 / NUM_IMAGES) . '%"><a href="' . $link . '">' . '<br /><img src="' . $image . '" /></a></td>';
    
    }
    echo '</tr></table>';

?>