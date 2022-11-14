<?php
	require_once "/home/mir/lib/db.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' href='styles.css'/>
	<title>Login</title>
</head>
<body>
<div>
<button type="button" name="up_the_rabbithole" onclick="window.location.href='https://wits.ruc.dk/~segura/test';">Blackholerecordsco.</button>
</div>

    <!-- Login form using post -->
  <form action="login.php" method="post" class="login-form" >
    <div class='login-row'> 
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
  <div>
</body>
</html>

<?php


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pw = $_POST['pw'];
      if (login($username, $pw)) {
        //hvis true, så starter vi en session og gemmer username og pw som session variabler
        //session variabler kan kun være "fulde" hvis login er korrekt
        //derfor kan vi så vores main.page checke om de tomme eller fyldte
        // og herefter enten vise hemmelig info eller returnere brugeren tilbage til login siden
        session_start();
        $_SESSION['suser'] = $username;
        $_SESSION['spw'] = $pw;
        echo "true redirect til secret page";
        header('Location:index.php');
        exit;
        
      } else if (!login($username, $pw)) {
        echo "<div class='errorMsg'>
                <h1>WRONG LOGIN FOOL - be kind and try again</h1>
              </div>";
    }
}
?>