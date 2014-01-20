<?php
include ("include/config.php");
															

 	 
	 
$allowedExts = array("jpg", "jpeg", "gif", "png"); 
$extension = end(explode(".", $_FILES["file"]["name"])); 
if ((($_FILES["file"]["type"] == "image/gif") 
    || ($_FILES["file"]["type"] == "image/jpeg") 
    || ($_FILES["file"]["type"] == "image/png") 
    || ($_FILES["file"]["type"] == "image/pjpeg")) 
    && ($_FILES["file"]["size"] < 200000) 
    && in_array($extension, $allowedExts)) 
{ 
    if ($_FILES["file"]["error"] > 0) 
    { 
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>"; 
    } 
    else 
    { 
        echo "Upload: " . $_FILES["file"]["name"] . "<br>"; 
        echo "Type: " . $_FILES["file"]["type"] . "<br>"; 
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>"; 
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>"; 

        if (file_exists("posters/" . $_FILES["file"]["name"])) 
        { 
            echo $_FILES["file"]["name"] . " already exists. "; 
        } 
        else 
        { 
            move_uploaded_file($_FILES["file"]["tmp_name"], 
                "posters/" . $_FILES["file"]["name"]); 
            echo "Stored in: " . "posters/" . $_FILES["file"]["name"]; 
        } 
    } 
} 
else 
{ 
    echo "Invalid file<br />"; 
    print_r($_FILES); 
} 




$name = $_POST['name'];
$year = $_POST['year'];
$desc = $_POST['desc'];	
$avatar = "posters/" . $_FILES["file"]["name"];          

 $result2 = mysql_query ("INSERT INTO `movies` (`id_mov`, `name`, `year`, `desc`, `poster`) VALUES(NULL, '$name','$year','$desc','$avatar')");
	
if ($result2=='TRUE')
    {

     echo "ADDED. <a href='index.php'>Главная страница</a>";
    }          
else 
{
            echo "ERROR.";
 };

echo "<br><br><a href='admin.php'>Обратно</a>";
?>          