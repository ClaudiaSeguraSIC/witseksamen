<?php
	session_start();

	?>
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

	<button type="button" name="up_the_rabbithole" onclick="window.location.href='https://wits.ruc.dk/~segura/test';">Blackholerecordsco.</button>

<br>

	<a href="https://wits.ruc.dk/~segura/test">Hjem til blokken - Im still Sune at the blok</a>

<p>Om Brugere</p>

<?php
    require_once "/home/mir/lib/db.php";

    $uid = $_GET['uid'];
    $user = get_user($uid);
    echo 'Userid: ','<a href="vis_bruger.php?uid=' . $uid . ' ">' . $uid . '</a>';
    echo "<br>";
    echo 'Firstname: ', '<a href="vis_bruger.php?uid=' . $uid . ' ">' . $user['firstname'] . '</a>';
    echo "<br>";
    echo 'Lastname: ', '<a href="vis_bruger.php?uid=' . $uid . ' ">' . $user['lastname'] . '</a>';
    echo "<br>";
    echo "<br>";
    echo 'List of blogposts by ';
    echo '<a href="vis_bruger.php?uid=' . $uid . ' ">' . $uid . '</a>';


    $blogposts = get_pids_by_uid($uid);
    // convert array to string

    echo "<br>";

    foreach($blogposts as $value) {
      $blogid = get_post($value);
      echo '<a href="blogpost.php?pid=' . $value . '">'. $value .  '. ' . $blogid['title']; '</a>';
      echo "<br>";

    }

			echo $_SESSION['user'];
			echo 'test';

  ?>
