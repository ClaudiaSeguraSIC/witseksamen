<!DOCTYPE html>
<html>
  <head>
		<body>



<?php

//dette dokument, skal fungere som en 'modifyer', når du har skrevet noget i php tidligere, skal den gamle tekst blive kaldt frem
//hvis du taster det rigtige bruger uid og pid for posten.

  require_once "/home/mir/lib/db.php";

modify_post($_GET['pid'], $_GET['title'], $_GET['content']);

header('Location: https://wits.ruc.dk/~segura/test/blogpost.php?pid=' . $_GET['pid']);

?>


</body>
</html>
