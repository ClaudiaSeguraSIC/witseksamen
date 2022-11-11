<!DOCTYPE html>
<html>
  <head>
    <title>Indlæg fra bruger</title>


</head>
	<body>

		<form action="opretpost.php">
		  <label for="fname">First name:</label><br>
		  <input type="text" name="fname" value=""><br>
		  <label for="lname">Last name:</label><br>
		  <input type="text" name="lname" value=""><br><br>
			<label for="content">text:</label><br>
			<input type="text" name="lname" value=""><br><br>
		 <input type="submit" value="Submit">
		</form>


		//If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".

//Der skal skrives en brugeruid - denne skal bruges til at kunne skrive et indlæg
for. Hvordan definere man en bruger.

//Vi skal bruge ittel og indhold, det skal vi have for en side.

//Vi skal have det i en form, der sender nogle parametre med til en ny side.

//Vi skal lave nogle felter - når man klikker en en knap, skal alt det vi har
brug for, for parametre. Via 'action' kan man få man gøre det på samme side
hvor der bliver vidst med via formelementer.

//brug html til at definere hvordan det skal se ud, og brug derefter php til at
skabe de dynamsiske ting ind.

<?php

  require_once "/home/mir/lib/db.php";

add_user("Madeup", "Claudia", "Segura", "123");


//add_post(string $uid, string $title, string $content);
// Husk at stjæle disse. de er brugbare, fjern string og tilføj dit egen input.

//add_post("Madeup", "About Blackholerecordsco.", "BLACKHOLERECORDSco, is a record company, which
	do not distribute records, we distributed music
	knowledge about listening to music, art and studies
	about music");




?>



		</body>
		</html>
