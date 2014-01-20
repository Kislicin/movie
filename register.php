<?php include_once('include/config.php');?>
<?php include_once('include/function.php');?>
<?php

  if(!$_SESSION['id']){  include_once('tmp/register.tpl');
 } else {exit("Вы уже зарегистрированны");}
 if($_POST['button']){
 if($_SESSION[secret_number]==""){
	$_SESSION[secret_number] = "ABCD";
}
if($_SESSION["secret_number"] != $_POST[pkey]){
	return exit("<b>Ошибка номера ввода капчи</b>");
}


$email = trim(htmlspecialchars($_POST['email'],ENT_QUOTES));
$name = trim(htmlspecialchars($_POST['name'],ENT_QUOTES));
$firstname = trim(htmlspecialchars($_POST['firstname'],ENT_QUOTES));
$password = trim(htmlspecialchars($_POST['password'],ENT_QUOTES));
$me = trim(htmlspecialchars($_POST['me'],ENT_QUOTES));
stripslashes($email);
stripslashes($name);
stripslashes($firstname);
stripslashes($password);
stripslashes($me);

if($email == "" && $name == "" && $password){return exit("Не все поля заполненны");}

$select = "SELECT * FROM users";
$query = mysql_query($select) or die(mysql_error());
$array = mysql_fetch_array($query);

if(@mysql_num_rows($query) <= 0){return exit('В базе данных нет записей');}
if(mysql_num_rows($query) > 0){
tmp_email($email);
}

$newpassword = md5($password);

db_insert($email,$name,$firstname,$newpassword,$me);

$cookie = mysql_query("SELECT * FROM users WHERE email ='$email'") or die(mysql_error());
$assoc = mysql_fetch_assoc($cookie);
$_SESSION['id'] = $assoc['id_user'];

$_COOKIE['id'] = $_SESSION['id'];

echo "Вы успешно зарегистрированны, <a href='index.php'><b> перейти в личный кабинет</b></a>";
?>
<br>

<script type="text/javascript"> 
alert("Регистрация прошла успешно, после нажатия на кнопку Вы будете перенаправлены на главную страницу сайта") 
location.replace("index.php");  
</script>

<?php
 exit;
}


?>
