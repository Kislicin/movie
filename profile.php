<?php
session_start(); ?>

<html>
<head>
<title>��������� Fresh Movies</title>
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
<div class="fleft"><a href="index.html">Fresh <span>Movies</span> ��������� </a></div>
					<ul>
						<li><a href="index.html"><img src="images/icon1-act.gif" alt="" /></a></li>
						<li><a href="contact-us.html"><img src="images/icon2.gif" alt="" /></a></li>
						<li><a href="sitemap.html"><img src="images/icon3.gif" alt="" /></a></li>
					</ul>
				</div>
				<div class="row-2">
					<ul>
						<li><a href="index.php" >��������</a></li>
						<li><a href="about-us.html">� ���</a></li>
						<li><a href="articles.html">�������� �����</a></li>
						<li><a href="contact-us.html">��������</a></li>
						<li class="last"><a href="sitemap.html">����� �����</a></li>
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
  //��������� ������
  $update = mysql_query("UPDATE users SET email = '$email', name = '$name', firstname = '$firstname',
                        me = '$me' WHERE id_user = '$meid'") or die (mysql_error());
  if($update){print "������ ��������� �������";}
}
?>
<?php
 $id = $_SESSION['id'];
 //������ ������ ������� �� ���� ������
  $select = mysql_query("SELECT * FROM users WHERE id_user = '$id'") or die(mysql_error());
  $assoc = mysql_fetch_assoc($select);
 //������� ��� ������
  print "<center><h1>���� ������</h1><br />";
  echo "<p><b>���:</b>{$assoc['name']}</p><br />";
  //�������� �������, ���� ��� �� �������� �� ������� �� ��� ���� �� �������� ���� �������
  echo $assoc['firstname'] == false ?"<font color='red'>�� �� ����� �������</font>":"<p><b>�������:</b>{$assoc['firstname']}</p><br />";
  echo "<p><b>Email:</b> {$assoc['email']}</p><br />";
  echo "<p><b>���������� � ����:</b> {$assoc['me']}</p><br />";
?>
<br />
<br />
<center>�������� ������!<br />
<form  method="post">
  <p>E-mail: <br />
  <input name="email"  type="text" value="<?=$assoc['email'];?>" maxlength="25"/></p>
  <p>���: <br />
  <input name="name"  type="text"  maxlength="15" value="<?=$assoc['name'];?>"/></p>
  <p>�������: <br />
  <input name="firstname"  type="text" maxlength="25" value="<?=$assoc['firstname'];?>"/></p>
  <p>� ����: <br /><textarea name="me" cols="65" rows="10" style="resize: none;" class="text" maxlength="300"><?=$assoc['me'];?></textarea></p> <br />
  <input type="submit" value="��������" name="button" class="button">
  </form>

  <a href ="index.php">�� �������</a>
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
