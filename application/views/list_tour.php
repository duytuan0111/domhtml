
<?php 
include('simple_html_dom.php');
$url   = 'http://vietworldtourist.com/du-lich-trong-nuoc/du-lich-le-hoi';
$html  = file_get_html($url);
$list_tour = $html->find('tr.gradeA ');

foreach ($list_tour as $list_t) {
	$list_tour_a = $list_t->find('h4 a');
	foreach ($list_tour_a as $list_tour_a_n) {
		echo $list_tour_a_n->innertext;
		echo "--->";
		echo $list_tour_a_n->href;
		echo "<br>";
		
	}
	$list_tour_image =$list_t->find('img.tour_summary_img');
	foreach ($list_tour_image as $list_tour_img) {
		echo "<img src='$list_tour_img->src' style='  border: 1px solid #ddd;
		border-radius: 4px;
		padding: 5px;
		width: 150px;' >";
		echo "---->";
		echo $list_tour_img->src;
		// lay anh ve project
		/* $src = $list_tour_img->src;
		$img = APPPATH.'public/image/'.basename($src);
		file_put_contents($img, file_get_contents($src)); */
	}
	$list_tour_right = $list_t->find('.list-right p');

	foreach ($list_tour_right as $list_tour_right_n) {
		echo $list_tour_right_n;
	}
	$list_tour_infomation = $list_t->find('.list-right .chitiet');
	foreach ($list_tour_infomation as $list_tour_inf) {
		echo " chitiet --->";
		echo $list_tour_inf->href;
		echo "</br>";
		echo "</hr>";

		
	}
	

	

}



?>

