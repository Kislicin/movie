<?php include ("include/config.php"); ?>
<html>
<head>
<title>Fresh Movies</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>

</head>
<body id="page5">
<div class="tail-top">
	<div class="tail-bottom">
		<div id="main">
<!-- HEADER -->
			<div id="header">
				<div class="row-1">
<div class="fleft"><a href="index.html">Fresh <span>Movies</span> кинотеатр </a></div>
					<ul>
						<li><a href="index.html"><img src="images/icon1.gif" alt="" /></a></li>
						<li><a href="contact-us.html"><img src="images/icon2-act.gif" alt="" /></a></li>
						<li><a href="sitemap.html"><img src="images/icon3.gif" alt="" /></a></li>
					</ul>
				</div>
				<div class="row-2">
					<ul>
						<li><a href="index.php">Домашняя</a></li>
						<li><a href="about-us.html">О нас</a></li>
						<li><a href="movies.php"  class="active">Репертуар</a></li>
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
								<h3>Сейчас <span>Показываем</span></h3>
				<div class="content">
			
<?php
$strSQL = "SELECT `id_mov`,`name`,`year`,`desc`, `poster` FROM `peter`.`movies`";     
$rs = mysql_query($strSQL);                         

while($row = mysql_fetch_array($rs)) {                   
echo "<h1>".$row['name']." (".$row['year'].")</h1>"; echo "<br /><br />";
echo "<img src='".$row['poster']."'>"; echo "<br />";
echo $row['desc']; echo "<hr><br />";
  }        
?>		
				</div>
			</div>
<!-- FOOTER -->
			<div id="footer">
				<div class="left">
					<div class="right">
						<div class="inside">Copyright Fresh Movies<br />
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
