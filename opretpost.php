<?php
	session_start();

	?>
<!DOCTYPE html>
<html>
  <head>
    <title>Blogpost</title>
		<style>
			button {
				color: #613583;
				background-color: #c061cb;
				font-size: 19px;
				border: 5px solid #613583;
				padding: 15px 50px;
				letter-spacing: 15px;
				cursor: pointer
			}
			button:hover {
				color: #c061cb;
				background-color: #613583;
			}
		</style>
	</head>
	<body>

	<button type="button" name="up_the_rabbithole" onclick="window.location.href='https://wits.ruc.dk/~segura/test';">Blackholerecordsco.</button>

<?php


//echo $_SESSION['user'];
echo	'<form action="thecreator.php" method="get">
	 <input placeholder="'+$_SESSION['user']+'" type="text" name="uid" style="width:400px;"><br>
		<br> <input placeholder="title" type="text" name="title" style="width:400px;"><br>
		<br> <input placeholder="content" type="text" name="content" style="height:500px; width:300px;"><br>
			<input type="submit">
		</form>';

?>

	</body>
</html>
