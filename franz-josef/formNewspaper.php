<?php if (isset($_GET['submit'])) {
echo '<p style="color:red;">Сообщение отправлено!</p>';
}
?>

<div class="border">
 <div class="center">
 <div class="sc">

<form   method="post" action="<?php bloginfo('template_url'); ?>/handler.php">
<label for="name" >Назва газети</label>
<input type="text" name="name" list="browsers" size="19" class="inputNewspaper" >
<datalist id=browsers >
 <option  >Нове життя</option>
 <option >Голос Баштанщини</option>
 <option  >Березань</option>
 <option >Народна трибуна</option>
 <option  >Перемога</option>
 <option >Зоря</option>
 <option  >Вісті Вознесенщини</option>
 <option >Вісник Врадіївщини</option>
 <option  >Трибуна хлібороба</option>
 <option >Єланецький вісник</option>
 <option  >Вісник Жовтневщини</option>
 <option  >Голос Казанківщини</option>
 <option >Кривоозерщина</option>
 <option  >Маяк</option>
 <option  >Вперед</option>
 <option  >Промінь</option>
 <option >Чорноморська зірка</option>
 <option  >Очаків</option>
 <option  >Прибузький вісник</option>
 <option >Вісник Первомайська</option>
 <option  >Вісті Снігурівщини</option>
 <option >Контакт</option>
 <option >День за днем</option>
 <option  >Вечерний Николаев</option>
  <option  >Рідне Прибужжя</option>
</datalist>
</div></br>
<div class="sc">
<label  for="number">Номер </label>
<input  name="number"  type="double" size="18" class="inputNewspaper" value=""/>
</div></br>
<div class="sc">
	<label  for="date">Дата </label>
	<input name="date"  type="date" size="22" class="inputNewspaper" value=""/>
</div></br>
<div class="sc">
<label  for="article">Назва статті </label>
<input  name="article"  type="article" size="18" class="inputNewspaper" value=""/>
</div></br>
<div class="sc"> 
<label  for="content">Зміст </label>
<textarea class="inputNewspaper" name="content" class="element textarea small" rows="7" cols="22"  ></textarea>
</div></br>
</br>
<div class="sc">
<label  for="keyword">Ключове слово </label>
<input class="inputNewspaper"  name="keyword" class="element text medium" type="keyword" size="18" class="inputNewspaper" value=""/>
</div></br>
<div class="sc">
 <label>РДА</label>               <input type="checkbox" name="RDA" value="РДА">
</div>
 
 <div class="sc">
 <label>Голова обл ради</label>   <input type="checkbox" name="Golova" value="Голова обл. рады"></br>
 </div>
 <div class="sc">
 <label>Обл Рада</label>          <input type="checkbox" name="OBL_Rada" value="Обл Рада">
</div>
 </br>
 </br>

<input type="hidden" name="form_id" value="" />
<input class="SubmitSearch"  type="submit" name="submit" value="Відправити" />

</div>
</form>
</div>
</div>

</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>


