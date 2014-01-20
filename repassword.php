<?php include_once('include/config.php');?>
<?php include_once('include/function.php');?>
<?php
  $id = $_SESSION['id'];
  $password = mt_rand(1,10).mt_rand(10,50).mt_rand(50,100).mt_rand(100,1000) * 3;
  getPassword($password,$_SESSION['id']) or die("Ошибка") ;
  echo "Ваш новый пароль". $password;
?>
<center>Пароль успешно изменен <a href='index.php'>На главную</a></center>