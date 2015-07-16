<?php
/* Define these, So that WP functions work inside this file */
define('WP_USE_THEMES', false);
require( $_SERVER['DOCUMENT_ROOT'] .'/wp-blog-header.php');
header('Location: ' . $_SERVER['HTTP_REFERER'] . '');
?>
<?php
$wpdb->delete(
'information_about_newspaper',
array(
'id' => $_POST['id'],


)
);
?>