<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0 
* Template Name: search_newspaper_wp
*/ 
define('WP_USE_THEMES', false);
require( $_SERVER['DOCUMENT_ROOT'] .'/wp-config.php');
header('Content-Type: text/html; charset=utf-8', true);
get_header();
?>
<div class = "searchTable">
<H2>Результат поиска</H2>
<?php

if(isset($_POST["button_search"])&& (!empty($_POST["words"]))){
$words = htmlspecialchars($_POST["words"]);
	$results = searchNewsaper_wp($words);
	if(count($results) != 0){
		
		for($i = 0; $i < count($results); $i++)
		{
			
			$id = $results[$i]["id"];
			$name = $results[$i]["name"];
			$number = $results[$i]["number"];
			$date = $results[$i]["date"];
			$article = $results[$i]["article"];
			$content = $results[$i]["content"];
			$keyword = $results[$i]["keyword"];
			$RDA = $results[$i]["RDA"];
			$Golova = $results[$i]["Golova"];
			$OBL_Rada = $results[$i]["OBL_Rada"];
			include "search_item.php";
		}
	}
	
}





?>

<?php

function searchNewsaper_wp($words){
	$query_search="";
	$arraywords = explode(" ", $words);
//	print_r($arraywords);
	foreach($arraywords as $key => $value){
		if(isset($arraywords[$key - 1]))$query_search .= " AND";
		$query_search .="(`name` LIKE '%$value%' OR `keyword` LIKE '%$value%')";
	}
	
	;
		global $wpdb;
	
		$result_set = $wpdb->get_results( "SELECT * FROM `newspaper_wp` WHERE $query_search");
		echo "<table    >";
  echo "<tr class=too><td>ID</td><td>Название газеты</td><td>Номер</td><td >Дата</td><td>Название статьи</td><td>Содержание</td><td>Ключевое слово</td>
  <td>РДА</td><td>Голова обл ради</td><td>Обл Рада</td></tr>";
			foreach ( $result_set as $result ) {
				
			echo ' <tr><td>'
			. $result->id . 
			'&nbsp</td><td>'
			. $result->name .
			'&nbsp</td><td>'
			. $result->number .
			'</td> <td >'
			. $result->date .'
			</td> <td >'
			. $result->article .
			'</td> <td >'
			. $result->content .
			'</td> <td >'
			. $result->keyword .
			'</td> <td >'
			. $result->RDA .
			'</td> <td >'
			. $result->Golova .
			'</td> <td >'
			. $result->OBL_Rada .'

				</td></tr>
' ;
			
			}
echo "<table>";
	
	}
	

	
?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>