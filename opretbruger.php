<?php
	session_start();

	?>
<!DOCTYPE html>
<html>
  <head>
    <title>opretbruger</title>
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

<?php

echo	'<form action="theusercreator.php" method="get">
	 <input placeholder="uid" type="text" name="uid" style="width:400px;"><br>
		<br> <input placeholder="firstname" type="text" name="firstname" style="width:400px;"><br>
		<br> <input placeholder="lastname" type="text" name="lastname" style="width:400px;"><br>
		<br> <input placeholder="Password" type="text" name="password" style="width:400px;"><br>
			<input type="submit">
		</form>';

?>

	</body>
</html>
