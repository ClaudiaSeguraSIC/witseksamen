<!DOCTYPE html>
<html>
  <head>
    <title>Brugere</title>

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

<button type="button" name="hjem" onclick="window.location.href='https://wits.ruc.dk/~segura/test';">Sunes blok</button>

<br>

<h1> Brugere </h1>

<br>

<?php
    require_once "/home/mir/lib/db.php";

    $uids = get_uids();
    foreach ($uids as $uid)
    {
      echo 'Username: ';
      echo '<a href="vis_bruger.php?uid=' . $uid . ' ">' . $uid . '</a>';
      echo "<br>";

    }
  ?>
