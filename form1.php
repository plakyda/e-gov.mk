
<form  name = "form1"  method = "POST">

<label>Название газеты</label> <input type = "text" name="name_newspaper" values="newspaper" ><br>


<label>Номер газеты</label> <input type = "text" name="number" values="number" ><br>


<label>Дата публикации</label> <input type = "date"  name="date" values="date" ><br>


<label>Название статьи</label> <input type = "text" name="article" values="article" ><br>


<label>Краткое описание статьи</label><textarea name="comment"  tabindex="4"></textarea> 
</br>


<label>РДА</label>   <input type="radio" name="RDA" value="RDA"> </br>
<label>Голова обл ради</label>   <input type="radio" name="Golova" value="Golova"></br>
<label>Обл Рада</label>   <input type="radio" name="OBL_Rada" value="OBL_Rada"> </br>
  
  </br>
<input type="submit" name="add" value="Отправить">
</form>


<?php include('db.php')?>