<?php
include_once('include/config.php');
$s=$_POST['usr'];
$w=$_POST['mov'];
$del = mysql_query("DELETE FROM `peter`.`favorite` WHERE `id_user`='$s' AND `id_mov` = '$w'");
header ('Location: index.php');
exit(); 
?>