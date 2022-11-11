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

<button type="button" name="up_the_rabbithole" onclick="window.location.href='https://wits.ruc.dk/~segura/test';">Blackholerecordsco.</button>

<?php

			require_once "/home/mir/lib/db.php";



$tillad_adgang= login($_GET['uid'], $_GET['password']);

echo $tillad_adgang;

if($tillad_adgang){
	$_SESSION['user'] = $_POST['uid'];

	if(!isset($_SESSION['user'])){
		header('Location: https://wits.ruc.dk/~segura/test/vis_bruger.php?uid=' . $_GET['uid']);
	}


echo $_GET['uid'];
}
else{
	header('Location: https://wits.ruc.dk/~segura/test/login.php?logonfailed=true');

}
	?>


<!-- Denne side, skal fungere ligesom the_modifier/the_usercreator. Den skal tjekke
om bruger navn er true eller false. Hvis true (altså brug af en if-sætning?),
skal brugeren tildeles en cookie, hvis ikke skal den returneres til login siden -->

</body>
</html>
