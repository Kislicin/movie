<?php
session_start();
  //Константа абсолютного пути
  define("URI_PATH","http://{$_SERVER['HTTP_HOST']}");
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "peter";
  @mysql_connect($host,$user,$password) or die (mysql_error());
  @mysql_select_db($db) or die(mysql_error());
  @mysql_query("SET NAMES `CP1251`");
?>
