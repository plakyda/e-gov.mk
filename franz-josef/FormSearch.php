<?php if (isset($_GET['button_search'])) {
echo '<p style="color:red;">Сообщение отправлено!</p>';
}
?>
</br>
<form name="search" method="post" action="<?php bloginfo('template_url'); ?>/searchDB.php">
<input class="FieldSearch"  type="text" name="words"/>
<input class="SubmitSearch" type="submit" name="button_search" value="Пошук" />
</form>
</br>

