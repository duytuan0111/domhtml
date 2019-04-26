<?php 
include('simple_html_dom.php');
$url = 'https://vnexpress.net/';
$html = file_get_html($url);
$images = $html->find('img');
$arr = array();

file_put_contents(APPPATH.'public/image/Hạ_Long_1.jpg',file_get_contents('http://vietworldtourist.com/uploads/images/anhnho/H%E1%BA%A1_Long_1.jpg'));
die();
foreach ($images as $img) {
    // $image = "<img src = 'xxx' />"
    // xxx = $img->src
    // $s =   "link/logo.png" => logo.png
    $src = $img->src;

   
    $img = APPPATH.'public/image/'.basename($src);
    file_put_contents($img, file_get_contents($src));
}






?>