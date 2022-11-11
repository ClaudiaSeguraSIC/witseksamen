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

					.content {
			  max-width: 500px;
			  margin: auto;
			}
				</style>

<body>

	<section class ="section-1">

		<img src='blackhole.gif'width='100%' height='400px'alt='Blackholeswirling'/>

	<div class="content">
  <!-- Page content -->


	<h1> BLACKHOLERECORDSco </h1>
<h2> <em>still just floating in space</em> </h2>

<img src='bhrc.jpg'width='600' height='500'alt='Blackholerecordsco. logo. Astronaut listning to blackhole records.'/>


<br>

	<button type="button" name="up_the_rabbithole" onclick="window.location.href='https://wits.ruc.dk/~segura/test';">Blackholerecordsco.</button>



	<p> Miniprojekt og arbejde med at lege med at lave en hjemmeside</p>

		<!-- Brugere skal kunne oprette 'blogindlæg' disse vil jeg lade bestå af
		img / billeder / lydklip / tekst. -->

<br>
<a href="https://wits.ruc.dk/~segura/test/login.php">LOGIN</a>

<form action="vis_bruger.php" method="get">
	Søg efter bruger: <input type="text" name="uid">
	<input type="submit">
</form>

<form action="blogpost.php" method="get">
	søg efter blogpost pr. pid: <input type="text" name="pid">
	<input type="submit">
</form>

<br>
<!--her skal man kunne oprette brugere-->

<form action="blogpost.php" method="get">
brug pid og uid til at redigere post <br>
 <input type="text" name="uid" placeholder="skriv dit uid"> <br>
	<input type="text" name="pid" placeholder="skriv dit pid"> <br>
	<input type="submit">
</form>

<br>
<a href="https://wits.ruc.dk/~segura/test/opretpost.php">Opret Post</a>
<br>
<a href="https://wits.ruc.dk/~segura/test/opretbruger.php">Opret UID/BRUGER</a>

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

echo '<a href="https://wits.ruc.dk/~segura/test/brugere.php">Brugere</a>';

			?>


			</div>

			<!-- Footer with instagram og facebook link -->

			<a href="https://www.instagram.com/engangsliv/"class="gg-instagram"></a>
					<link href='https://css.gg/instagram.css' rel='stylesheet'>
						<a href="https://www.instagram.com/engangsliv/" class="instagram"></a>

					<!-- Add icon library -->
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

			<!-- Add font awesome icons -->
			<a href="https://www.facebook.com/claudia.vesterager" class="fa fa-facebook"></a>

<footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
 				<p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
		<!-- End footer -->
</footer>

</section>

<!-- Herinde vil vi have en knap, der flyttes rundt - via 'position' -->

<section class="section-2">

		<div class="move-me"><button type="button" name="down_the_rabbithole" onclick="window.location.href='https://wits.ruc.dk/~segura/test';">theRecords</button></div>

</section>



		 </body>
		 </html>
