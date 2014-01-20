<?php
include_once ("include/config.php");
$s=$_POST['movies_td'];
$deletemovie = mysql_query("DELETE FROM `peter`.`movies` WHERE `id_mov`='$s'");
header ('Location: admin.php');
exit(); 
?>