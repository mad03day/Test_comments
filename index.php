<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db_name = "test";
	$connect = mysqli_connect($host, $user, $pass, $db_name);
	
	if (mysqli_connect_errno())
	{
		die("DataBase conection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno . ")");
	} 
	else 
	{
		#echo "Connection success!\n" . mysqli_get_host_info($connect) . "<br />";
	}
	
	$req = mysqli_query($connect, "SET NAMES utf8");
	$query = "SELECT * FROM coment";
	$req = mysqli_query($connect, $query);	
	$ar_com = [];
	
	while($res = mysqli_fetch_assoc($req))
	{
		$ar_com[]= $res;
	}	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>
		Тест коментариев
	</h1>
	<form name="comment" action="comment.php" method="post">
  <p>
    <label>Имя:</label>
    <input type="text" name="name" placeholder = "Имя" required/>
  </p>
  <p>
    <label>Комментарий:</label>
    <br />
    <textarea name="text_comment" cols="60" rows="20"></textarea>
  </p>
  <p>
    <input type="hidden" name="page_id" value="150" />
    <input type="submit" name = "submit" value = "Отправить" />
  </p>
</form>

<hr>
	<?php 
		if( isset($_POST['submit']))
		{
			
		}
	?>

	<div id = "comment_area">
		<?php foreach($ar_com as $com_item): ?>
		<div class = "comment_tile">
			<h2>
				<?php echo $com_item['name']?>
			</h2>
			<p>
				<?php echo $com_item['text']?>
			</p>
			<p>
				<?php echo $com_item['date']?>
			</p>
		</div>
		<?php endforeach; ?>
	</div>
</body>
</html>