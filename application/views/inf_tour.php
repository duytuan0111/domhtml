<?php 
include('simple_html_dom.php');
$url = 'http://vietworldtourist.com/tour/with/Tour-Ha-Long-Bat-Trang-Chua-Huong-4-ngay-3-dem/184';
$html = file_get_html($url);
$tour_information = $html->find('.col-lg-9');

foreach ($tour_information as $tour_inf) {
	$tour_inf_title = $tour_inf->find('h1');
	foreach ($tour_inf_title as $tour_inf_title_n) {
		echo "<h2>$tour_inf_title_n->innertext</h2>";
	}
	$tour_inf_img = $tour_inf->find('.visa img');
	foreach ($tour_inf_img as $tour_inf_img_n ) {
		echo "<img src='$tour_inf_img_n->src' style='border: 1px solid #ddd;
		border-radius: 4px;
		padding: 5px;
		width: 150px;'>";
		echo "-->";
		echo  $tour_inf_img_n->src;
		echo "</br>";
	}
	$tour_inf_p = $tour_inf->find('.list-right p');
	foreach ($tour_inf_p  as $tour_inf_p_n ) {
		echo $tour_inf_p_n->innertext;
		echo "</br>";
	}
	// khung giới thiệu
	$tour_view_k_1 = $tour_inf->find('.view_k_1');
	foreach ($tour_view_k_1  as $tour_view_k_1_n) {
		echo $tour_view_k_1_n->innertext;
		echo "</br>";
	}
	// khung Lịch trình
	$tour_view_k_2 = $tour_inf->find('.view_k_2 li');
	foreach ($tour_view_k_2 as $tour_view_k_2_n) {
		 echo $tour_view_k_2_n->innertext;
	$tour_view_k_2_img =$tour_view_k_2_n->find('p .img');
	foreach ($tour_view_k_2_img as $tour_view_k_2_img_n) {
		echo  "<img src='$tour_view_k_2_img_n->src'>";

	}

	}
	// Khung Giá & Điều khoản
	$tour_view_k_3  = $tour_inf->find('.view_k_3');
	foreach ($tour_view_k_3 as $tour_view_k_3_n) {
		echo $tour_view_k_3_n->innertext;
	}
	// Khung Đặt Tour
	$tour_view_k_5  = $tour_inf->find('.view_k_5');
	foreach ($tour_view_k_5 as $tour_view_k_5_n) {
		echo $tour_view_k_5_n->innertext;
	}
	// Khung Hình Ảnh
	$tour_view_k_6  = $tour_inf->find('.view_k_6 p');
	foreach ($tour_view_k_6 as $tour_view_k_6_n) {
		echo $tour_view_k_6_n->innertext;
	}
	// Khung Hỏi đáp
	$tour_view_k_7  = $tour_inf->find('.view_k_7');
	foreach ($tour_view_k_7 as $tour_view_k_7_n) {
		echo $tour_view_k_7_n->innertext;
	}

}



?>