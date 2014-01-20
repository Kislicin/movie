<?php include ("include/config.php"); ?>

<hr>

<form action="addmovie.php" method="post"  enctype="multipart/form-data">
			<p>
              <label>Имя:<br></label>
              <input    name="name" type="text" size="15"    maxlength="100" />
            </p>
			
			<p>
              <label>Год:<br></label>
              <input    name="year" type="text" size="5"    maxlength="4" />
            </p>
        
			<p>
              <label>Описание:<br></label>
              <input    name="desc" type="text" size="40"    maxlength="500" />
            </p>
		  
             <p>
              <label>Выберите постер. Изображение должно быть формата jpg, gif или png:<br></label>
              <input type="file" name="file" id="file"><br>
			  <input type="submit" name="submit" value="Добавить фильм">
            </p>
</form>

<hr>

<form action="deletemovie.php" method="post">

			<p>
              <label>Удалить фильм из базы данных:<br></label>
              <select name="movies_td">
<?php
$strSQL = "";
$rs = mysql_query($strSQL);
$strSQL = "SELECT `id_mov`,`name`,`year`,`desc`, `poster` FROM `peter`.`movies`";     
$rs = mysql_query($strSQL);
while($roww = mysql_fetch_array($rs)) {                   
echo "<option value='".$roww['id_mov']."'>".$roww['name']."</option>";
//echo "<input type='hidden' name='user' value='".$rows['id_mov']."'>";
}        
?>
			  </select>
            </p>
			<input type="submit" name="submit" value="Удалить">


</form>

<hr>

<form action="giverules.php" method="post">

			<p>
              <label>Дать привелегии админа:<br></label>
              <select name="giverules">
			  
			  <?php
				$strSQL = "";
				$rs = mysql_query($strSQL);
				$strSQL = "SELECT * FROM `peter`.`users`";     
				$rs = mysql_query($strSQL);
				while($roww = mysql_fetch_array($rs)) {                   
				echo "<option value='".$roww['id_user']."'>".$roww['name']."</option>";
				//echo "<input type='hidden' name='user' value='".$roww['id_user']."'>";
				
				}        
?>
				
			  </select>
			  <input type="submit" name="give" value="Дать привелегии"><br>
</form>

<hr>