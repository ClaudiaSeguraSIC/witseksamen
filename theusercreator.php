<!DOCTYPE html>
<html>
  <head>
		<body>



<?php

//dette dokument, skal fungere som en 'modifyer', når du har skrevet noget i php tidligere, skal den gamle tekst blive kaldt frem
//hvis du taster det rigtige bruger uid og pid for posten.

  require_once "/home/mir/lib/db.php";

//function = for-loop trough all database users, if usernavne exists return false, if exists return true

//if (true) --> add user
 add_user($_GET['uid'], $_GET['firstname'], $_GET['lastname'],$_GET['password']);

header('Location: https://wits.ruc.dk/~segura/test/vis_bruger.php?uid=' . $_GET['uid']);

?>


</body>
</html>
