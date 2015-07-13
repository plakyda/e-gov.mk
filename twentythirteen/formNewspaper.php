<?php if (isset($_GET['submit'])) {
echo '<p style="color:red;">Сообщение отправлено!</p>';
}
?>
<br>
<form   method="post" action="<?php bloginfo('template_url'); ?>/handler.php">
 
<label for="name">Название газеты </label>
<div>
<input  name="name" class="element text small" type="text"  value=""/>
</div>
<label  for="number">Номер </label>
<div>
<input  name="number"  type="double"  value=""/>
</div>
 <label  for="date">Дата </label>
<div>
<input name="date"  type="date"  value=""/>
</div>
<label  for="article">Название статьи </label>
<div>
<input  name="article"  type="article"  value=""/>
</div>
 
<label  for="content">Содержание </label>
<div>
<textarea  name="content" class="element textarea small"></textarea>
</div>
</br>
<label  for="keyword">Ключевое слово </label>
<div>

<input  name="keyword" class="element text medium" type="keyword"  value=""/>
</div>
 <label>РДА</label>   <input type="checkbox" name="RDA" value="РДА"> </br>
<label>Голова обл ради</label>   <input type="checkbox" name="Golova" value="Голова обл. рады"></br>
<label>Обл Рада</label>   <input type="checkbox" name="OBL_Rada" value="Обл Рада"> </br>
 </br>
<input type="hidden" name="form_id" value="" />
<input   type="submit" name="submit" value="Отправить" />
 
</form>