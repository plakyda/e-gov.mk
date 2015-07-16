<?php if (isset($_GET['button_delete'])) {
echo '<p style="color:red;">Сообщение отправлено!</p>';
}
?>
</br
<?php if (current_user_can ('level_7')) { ?>
<form name="search" method="post" action="<?php bloginfo('template_url'); ?>/function_delete.php">
<input class="FieldSearch" size="3" type="text" name="id"/>
<input class="SubmitSearch" type="submit" name="button_delete" value="Видалити" />
</form>
<?php } ?>	
</br>

