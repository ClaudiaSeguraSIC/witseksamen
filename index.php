<?php
	session_start();

	?>
<!DOCTYPE html>
<html lang='en'>
<html>
<meta charset='UTF-8'/>
  <link rel='stylesheet' href='styles.css'/>
			  <title>blackholerecordsco.</title>

				<style>
					button {
						color: #613;
						background-color: #c061cb;
						font-size: 19px;
						border: 5px solid #613583;
						padding: 10px 65px;
						letter-spacing: 15px;
						cursor: pointer
					}
					button:hover {
						color: #c061cb;
						background-color: #613583;
					}

					.content {
			  max-width: 500px;
			  margin: auto;
			}


				</style>

<body>
	<section class ="section-1">

			<a href="https://wits.ruc.dk/~segura/test/void.php" class="floatingbutton">The void</a>


				<img src='blackhole.gif' width='1500px' height='400px' alt='Blackholeswirling'/>





			<div class="content">
  <!-- Page content -->


				<h1> BLACKHOLERECORDSco </h1>
				<h2> <em>still just floating in space...</em> </h2>

				<img src='bhrc.jpg'width='600' height='500'alt='Blackholerecordsco. logo. Astronaut listning to blackhole records.'/>


				<br>

	<button type="button" name="up_the_rabbithole" onclick="window.location.href='https://wits.ruc.dk/~segura/test';">Blackholerecordsco.</button>


	<p> Miniprojekt // for pladeselskabet Blackholerecordsco.</p>

		<!-- Brugere skal kunne oprette 'blogindlæg' disse vil jeg lade bestå af
		img / billeder / lydklip / tekst. -->

				<br>

		<!--Login knap - der virker via en login side -->

<button type="button" name="loginButton" onclick="window.location.href='https://wits.ruc.dk/~segura/test/login.php';">LOGIN</button>

				<br>

<form action="vis_bruger.php" method="get">
	<input type="text" name="uid" placeholder="Find User: ">
	<input type="submit">
</form>

<form action="blogpost.php" method="get">
 <input type="text" name="pid" placeholder= "Find blogpost by pid:">
	<input type="submit">
</form>

<br>

<form action="blogpost.php" method="get">
Use Pid + uid to edit post <br>
 <input type="text" name="uid" placeholder="skriv dit uid"> <br>
	<input type="text" name="pid" placeholder="skriv dit pid"> <br>
	<input type="submit">
</form>

<br>

<button type="button" name="loginButton" onclick="window.location.href='https://wits.ruc.dk/~segura/test/opretpost.php';">Opret Post</button>
<br>

<button type="button" name="loginButton" onclick="window.location.href='https://wits.ruc.dk/~segura/test/opretbruger.php';">Opret bruger</button>
<p> Brugere </p>
		<?php

				require_once "/home/mir/lib/db.php";

				$uids = get_uids();
		    foreach ($uids as $uid)
		    {
		      echo 'Username: ';
		      echo '<a href="vis_bruger.php?uid=' . $uid . ' ">' . $uid . '</a>';
		      echo "<br>";

		    }

<button type="button" name="hjem" onclick="window.location.href='https://wits.ruc.dk/~segura/test/brugere.php';">Brugere</button>

			?>


			</div>

			<!-- Footer with instagram og facebook link -->

			<a href="https://www.instagram.com/engangsliv/"class="gg-instagram"target="_blank" rel="noopener noreferrer"></a>
					<link href='https://css.gg/instagram.css' rel='stylesheet'>

					<!-- instagram link med icon -->
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

			<!-- facebook link med icon -->
			<a href="https://www.facebook.com/claudia.vesterager" class="fa fa-facebook"target="_blank" rel="noopener noreferrer"></a>

<footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
 				<p class="w3-medium">Powered by <a href="https://wits.ruc.dk/~segura/test/" target="_blank" class="w3-hover-text-green">Claudia Segura & Nicolai Aphichat</a></p>


		<!-- End footer -->
</footer>



</section>


<!-- Herinde vil vi have en knap, der flyttes rundt - via 'position' -->
<section class="section-2">
	<div class="move me">


</section>



		 </body>
		 </html>
