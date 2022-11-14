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

	<div class="blogbox">
    <!-- Login form using post -->
  <form action="login.php" method="post" class="login-form" >
    <div class='login-row'> 
      <h1>Log på WITS</h1>
    <!-- username -->
      <label for="username"></label>
      <input placeholder="Indtast brugernavn" type="text" name="username" required>
    <!-- password -->
      <label for="pw"></label>
      <input placeholder="Indtast password" type="password" name="pw" required>
    <!-- submitbutton -->
      <div class="buttonHolder">
        <input type="submit" class='button' name="submit" value="Login">
      </div>
    </div>
  </form>
    <div class="registerText">
      <h2>Har du ikke en konto? <a href="createuser.php">Tilmeld dig</a></h2>
    </div>
  </div>
		</body>

<button type="button" name="up_the_rabbithole" onclick="window.location.href='https://wits.ruc.dk/~segura/test';">Blackholerecordsco.</button>

<?php

login();
//Denne side skal bruges til login. Vi ønsker at brugeren kan skrive sit
//uid og sit password. og vi skal have en submit-knap, så det er muligt at
//klikke videre. Brug evt. den form sætning, du brugte på den anden side.

			require_once "/home/mir/lib/db.php";
			require_once('functions.php');

echo	'<form action="theloginverifier.php" method="get">
	 <input placeholder="uid" type="text" name="uid" style="width:400px;"><br>
		<br> <input placeholder="Password" type="password" name="password" style="width:400px;"><br>
			<input type="submit">
		</form>';


if($_GET['logonfailed']){
	echo "Access Denied - Password incorrect";
}

?>

</html>
