<?php
/* Define these, So that WP functions work inside this file */
define('WP_USE_THEMES', false);
require( $_SERVER['DOCUMENT_ROOT'] .'/wp-blog-header.php');
header('Location: ' . $_SERVER['HTTP_REFERER'] . '');
?>
<?php
$wpdb->insert(
'information_about_newspaper',
array(
'name' => $_POST['name'],
'number' => $_POST['number'],
'date' => $_POST['date'],
'article' => $_POST['article'],
'content' => $_POST['content'],
'keyword' => $_POST['keyword'],
'RDA' => $_POST['RDA'],
'Golova' => $_POST['Golova'],
'OBL_Rada' => $_POST['OBL_Rada'],

)
);
?>