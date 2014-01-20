<?php
session_start(); ?>

<html>
<head>
<title>Кинотеатр Fresh Movies</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=URI_PATH;?>/js/script.js"></script> 
 <?php include_once('include/config.php');
 include_once('include/function.php');?>
</head>
<body id="page2">
<div class="tail-top">
	<div class="tail-bottom">
		<div id="main">
<!-- HEADER -->
			<div id="header">
				<div class="row-1">
<div class="fleft"><a href="index.html">Fresh <span>Movies</span> кинотеатр </a></div>
					<ul>
						<li><a href="index.html"><img src="images/icon1-act.gif" alt="" /></a></li>
						<li><a href="contact-us.html"><img src="images/icon2.gif" alt="" /></a></li>
						<li><a href="sitemap.html"><img src="images/icon3.gif" alt="" /></a></li>
					</ul>
				</div>
				<div class="row-2">
					<ul>
						<li><a href="index.php" >Домашняя</a></li>
						<li><a href="about-us.html">О нас</a></li>
						<li><a href="articles.html">Заказать билет</a></li>
						<li><a href="contact-us.html">Контакты</a></li>
						<li class="last"><a href="sitemap.html">Карта сайта</a></li>
					</ul>
				</div>
			</div>
<!-- CONTENT -->
				<div class="line-hor"></div>
				<div class="box">
					<div class="border-right">
						<div class="border-left">
							<div class="inner">
								<center>

<?php
  if($_POST['button']){
  $email = $_POST['email'];
  $name = $_POST['name'];
  $firstname = $_POST['firstname'];
  $me = $_POST['me'];
  $meid = $_SESSION['id'];
  //Обновляем данные
  $update = mysql_query("UPDATE users SET email = '$email', name = '$name', firstname = '$firstname',
                        me = '$me' WHERE id_user = '$meid'") or die (mysql_error());
  if($update){print "Данные сохранены успешно";}
}
?>
<?php
 $id = $_SESSION['id'];
 //делаем полную выборку из базы данных
  $select = mysql_query("SELECT * FROM users WHERE id_user = '$id'") or die(mysql_error());
  $assoc = mysql_fetch_assoc($select);
 //выводим все данные
  print "<center><h1>Ваши данные</h1><br />";
  echo "<p><b>Имя:</b>{$assoc['name']}</p><br />";
  //Проверим фамилию, если она не введенна то выведим то что юзер не заполнил поле фамилия
  echo $assoc['firstname'] == false ?"<font color='red'>Вы не ввели фамилию</font>":"<p><b>Фамилия:</b>{$assoc['firstname']}</p><br />";
  echo "<p><b>Email:</b> {$assoc['email']}</p><br />";
  echo "<p><b>Информация о себе:</b> {$assoc['me']}</p><br />";
?>
<br />
<br />
<center>Изменить данные!<br />
<form  method="post">
  <p>E-mail: <br />
  <input name="email"  type="text" value="<?=$assoc['email'];?>" maxlength="25"/></p>
  <p>Имя: <br />
  <input name="name"  type="text"  maxlength="15" value="<?=$assoc['name'];?>"/></p>
  <p>Фамилия: <br />
  <input name="firstname"  type="text" maxlength="25" value="<?=$assoc['firstname'];?>"/></p>
  <p>О себе: <br /><textarea name="me" cols="65" rows="10" style="resize: none;" class="text" maxlength="300"><?=$assoc['me'];?></textarea></p> <br />
  <input type="submit" value="Изменить" name="button" class="button">
  </form>

  <a href ="index.php">На главную</a>
</center>
  </center>
							</div>
						</div>
					</div>
				</div>
	  </div>
<!-- FOOTER -->
			<div id="footer">
				<div class="left">
					<div class="right">
						<div class="inside">Copyright Fresh Movies</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
