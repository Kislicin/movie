<?php
include_once('include/config.php');
$id=$_POST['giverules'];
$give = mysql_query("UPDATE  `peter`.`users` SET  `admin` =  '1' WHERE  `users`.`id_user` ='$id'");
header ('Location: admin.php');
exit(); 
?>