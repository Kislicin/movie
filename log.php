<?php include_once('include/config.php');?>
<?php include_once('include/function.php');?>
<html>
<head>
<title>������������� ������</title>
</head>
<body>
 <form  method="post">
 <p><b>������� ���� email:</b><br />
 <input name="email" type="text" /></p>
 <input type="submit" name="this" value="�����������" />
</form>

<?php
 if($_POST['this']){
   $email = htmlspecialchars(trim($_POST['email']));   //�������� ������������ �� ����
   $select = mysql_query("SELECT * FROM users WHERE email = '$email'") or die(mysql_error());
   //���������� ����� ������
   $rand = mt_rand(100,1000).mt_rand(2000,5000) * mt_rand(1,10) +2;
   $arr = mysql_fetch_assoc($select);
   //������� id
   $id = $arr['id_user'];
   //���� ����� � ����� ����� � �� ��� ������� ��������������� ���������
   if($arr['email'] != $email){return exit("������������ � ����� emaiil �� ���������������");}
   //���� ����, ������ ������ ������� ����� �� ��� ������� ������������� ����
   $password = md5($rand);
   $update = mysql_query("UPDATE users SET password = '$password' WHERE id_user = '$id'")or die(mysql_error());
   //���� ��� ����, ������� ���������
   $to = $email;
   $title = "������������� ������";
   $message = "������������ {$arr['name']}, ��� ����� ������ � ����� {$password}";
   $mail = mail($to,$title,$message);
   //�������� ������������
   if($mail){
      echo $arr['name']." ��� ����� ������ ������ � ��� �� email ����� <br />";
    }
    else {return exit('������ ��� �������� ���������');}

 }
?>
</body>
</html>