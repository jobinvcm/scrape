<?php
include('simple_html_dom.php');

$url = website url;
$html=file_get_html($url);
$imglinks=array();
$imglinksref=array();

foreach($html->find(' div div div  a img') as $element) 
       array_push($imglinks,$element->src);

foreach($imglinks as $links){
    if(strpos($links,'adv')){
        array_push($imglinksref,$links);
    }
}


print_r($imglinksref);

echo '<img src="' . $imglinksref[0] . '" width="700" height="200" style="vertical-align:middle"/>';
echo '<img src="' . $imglinksref[1] . '" width="700" height="200" style="vertical-align:middle"/>';
echo '<img src="' . $imglinksref[2] . '" width="700" height="200" style="vertical-align:middle"/>';
echo '<img src="' . $imglinksref[3] . '" width="700" height="200" style="vertical-align:middle"/>';
echo '<img src="' . $imglinksref[4] . '" width="700" height="200" style="vertical-align:middle"/>';
?>