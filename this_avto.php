<?php include_once('include/config.php');?>
<?php include_once('include/function.php');?>

<?php
if($_SESSION['id']){	echo "�� ��� ��������������� <a href='index.php'>�� �������</a><br />";
	exit;
}else{  include_once('tmp/auth.tpl');
}

?>


