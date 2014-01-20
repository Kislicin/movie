<?php
 include_once('include/config.php');
 //include_once('include/function.php');
 //setcookie("email","",time()-3600);
 setcookie("id","",time()-3600);
 unset($_SESSION['id']);
 header('Location:index.php');
?>