<?php 
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 * Template Name: Admin-FeedBack
 */
get_header();
?>



			<div class="searchdb">			
			<?php include('FormSearch.php');?>		
</div>

 <div class="tables">
 
<?php
  
$results = $wpdb->get_results("SELECT * FROM newspaper_wp");
 
if ($results)
	{
		
		 echo "<table border =1 >";
  echo "<tr class=too><td>ID</td><td>Название газеты</td><td>Номер</td><td >Дата</td><td>Название статьи</td><td>Содержание</td><td>Ключевое слово</td>
  <td>РДА</td><td>Голова обл ради</td><td>Обл Рада</td></tr>";
 foreach ($results as $result) 
 {
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
 echo '</table>'
 ;
 }

?>
 </div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>