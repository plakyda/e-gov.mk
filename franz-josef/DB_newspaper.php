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
	<div class="Delete" >			
			<?php include('Delete_submit.php');?>		
</div>

 <div class="tables">
 
<?php
  
$results = $wpdb->get_results("SELECT * FROM information_about_newspaper");
 
if ($results)
	{
		
		 echo "<table border-radius: 6px;>";
  echo "<tr class=too><th>ID</th><th>Назва газети</th><th>Номер</th><th >Дата</th><th>Назва статті</th><th>Зміст</th><th>Ключове слово</th>
  <th>РДА</th><th>Голова обл ради</th><th>Обл Рада</th></tr>";
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
</br></br></br></br>

<?php get_sidebar(); ?>
<?php get_footer(); ?>