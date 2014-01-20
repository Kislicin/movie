<?php include_once('include/config.php');?>
<?php include_once('include/function.php');?>
<?php
  if (!$_SESSION['id']) {
?>
<?php include_once('tmp/index.tpl');
}else{
      $id = $_SESSION['id'];
      $select = mysql_query("SELECT * FROM users WHERE id_user='$id'");
      $row = mysql_fetch_assoc($select);
      include_once('tmp/reg_index.tpl');
       if($_POST['del']){delete_acc($_SESSION['id']);
           ?>
               <script>alert('Аккакунт успешно удален');
               document.location.href="exit.php";
               </script>
           <?php
           exit;
       }




    function add_favorite($id,$movie){
	/*$check1 = mysql_query("SELECT `id_user` FROM `favorite`") or die(mysql_error());
	$check2 = mysql_query("SELECT `id_mov` FROM `favorite`") or die(mysql_error());
	
	while($c = mysql_fetch_assoc($check1)){
    if($с['email']===$email){return exit("Это у Вас уже существует!");}
	}*/
	
	
	$add = mysql_query("INSERT INTO `favorite` (`id_user`, `id_mov`) VALUES ('$id', '$movie')") or die(mysql_error());
	if(!add_favorite){return false;}
}
	   
	   if($_POST['add']){
	   add_favorite($_SESSION['id'],$_POST['movies']);
	   ?>
               <script>
			   alert('Добавлено'); 
			   location.reload();
			   </script>
       <?php
}
}
?>



