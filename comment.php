<?php
	$name = $_POST["name"];
	$page_id = $_POST["page_id"];
	$text_comment = $_POST["text_comment"];
    
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db_name = "test";
	$connect = mysqli_connect($host, $user, $pass, $db_name);
	
	if (mysqli_connect_errno())
	{
		die("DataBase conection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno . ")");
	}
	mysqli_query($connect, "SET NAMES utf8");
	mysqli_query($connect, "INSERT INTO `coment` (`id`, `name`, `text`, `date`) VALUES (NULL, '$name', '$text_comment', '2021')"); 	
	echo "Запись добавленна в базу данных";
	header('Location: http://testphp/index.php');
?>