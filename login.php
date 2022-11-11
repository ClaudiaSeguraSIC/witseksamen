<?php
	session_start();

	?>

<!DOCTYPE html>
<html>
  <head>
    <title>login side</title>
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

//Denne side skal bruges til login. Vi ønsker at brugeren kan skrive sit
//uid og sit password. og vi skal have en submit-knap, så det er muligt at
//klikke videre. Brug evt. den form sætning, du brugte på den anden side.

			require_once "/home/mir/lib/db.php";

echo	'<form action="theloginverifier.php" method="get">
	 <input placeholder="uid" type="text" name="uid" style="width:400px;"><br>
		<br> <input placeholder="Password" type="password" name="password" style="width:400px;"><br>
			<input type="submit">
		</form>';


if($_GET['logonfailed']){
	echo "Access Denied - Password incorrect";
}

?>



</body>
</html>
