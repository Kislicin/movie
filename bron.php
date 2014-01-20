<?php include ("include/config.php"); ?>

<html>
<form>
	<select>
<?php	
$strSQL = "SELECT `id_mov`,`name`,`year`,`desc`, `poster` FROM `peter`.`movies`";     
$rs = mysql_query($strSQL);
while($row = mysql_fetch_array($rs)) {                   
echo "<option value='".$row['name']."'>".$row['name']."</option>";
}        
?>
	</select>
	
	<input type="submit" value="Отправить">


</form>









</html>