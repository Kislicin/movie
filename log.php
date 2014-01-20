<?php include_once('include/config.php');?>
<?php include_once('include/function.php');?>
<html>
<head>
<title>Востановление пароля</title>
</head>
<body>
 <form  method="post">
 <p><b>Введите свой email:</b><br />
 <input name="email" type="text" /></p>
 <input type="submit" name="this" value="Востановить" />
</form>

<?php
 if($_POST['this']){
   $email = htmlspecialchars(trim($_POST['email']));   //Опознаем пользователя по мылу
   $select = mysql_query("SELECT * FROM users WHERE email = '$email'") or die(mysql_error());
   //Генерируем новый пароль
   $rand = mt_rand(100,1000).mt_rand(2000,5000) * mt_rand(1,10) +2;
   $arr = mysql_fetch_assoc($select);
   //Достаем id
   $id = $arr['id_user'];
   //Если юзера с таким мылом в бд нет выводим соответствующее сообщение
   if($arr['email'] != $email){return exit("Пользователь с таким emaiil не зарегистрирован");}
   //Если норм, меняем пароль данному юзеру на тот который сгенерировали выше
   $password = md5($rand);
   $update = mysql_query("UPDATE users SET password = '$password' WHERE id_user = '$id'")or die(mysql_error());
   //Если все норм, готовим сообщение
   $to = $email;
   $title = "Востановление пароля";
   $message = "Здравствуйте {$arr['name']}, Ваш новый пароль к сайту {$password}";
   $mail = mail($to,$title,$message);
   //Опознаем пользователя
   if($mail){
      echo $arr['name']." Ваш новый пароль выслан к вам на email адрес <br />";
    }
    else {return exit('Ошибка при отправке сообщения');}

 }
?>
</body>
</html>