<?php
$connection = mysql_connect ('localhost','wordpress','232581a');
 $db = mysql_select_db("newspaper");
    mysql_query("SET NAMES 'UTF-8w/o BOM' ;");
 if(!$connection || !$db){
  exit(mysql_error());
 }
 
  if(isset($_POST['add']))
  {
  $name_newspaper= strip_tags(trim($_POST['name_newspaper']));
  $number= strip_tags(trim($_POST['number']));
  $date= strip_tags(trim($_POST['date']));
  $article= strip_tags(trim($_POST['article']));
  $comment= strip_tags(trim($_POST['comment']));

  mysql_query("
     INSERT INTO wp_newspaper(name_newspaper,number,date,article,comment) 
     VALUES ('$name_newspaper', '$number', '$date', '$article','$comment')
     ");
     mysql_close();
     
  }
  $result = mysql_query(" SELECT * FROM wp_newspaper");
  $table = "<table border=1 black solid width=50% align=center>\n";
   while($row = mysql_fetch_array($result))
   {
	     $table .= "<tr>\n";

     $table .= "<td>".$row['name_newspaper']."</td>\n";
     $table .= "<td>".$row['number']."</td>\n";
     $table .= "<td>".$row['date']."</td>\n";
	 $table .= "<td>".$row['article']."</td>\n";
	 $table .= "<td>".$row['comment']."</td>\n";
     $table .= "</tr>\n";
   }

 echo $table;
  
  ?>
  