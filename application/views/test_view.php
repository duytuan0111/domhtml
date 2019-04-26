<?php 
 include('simple_html_dom.php');
    $url = 'https://vnexpress.net/the-gioi';
    $html = file_get_html($url);
    // echo $html;
    $new = $html->find('h4.title_news a');
    // echo count($new);
    //<a href ='xxx'> yyyy</a> yyyy= $news->innertext
    foreach ($new as $news ) {
    	echo $news->innertext;
    	echo "----";
    	echo $news->href;
    	echo '<br/>';
    }



?>