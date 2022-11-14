<?php

require_once "/home/mir/lib/db.php";    

// function der laver blogfeed
function createblogfeed() { 

$blogposts = get_pids();
// print_r(array_slice($blogposts,-5));
// tager de 5 sidste blogindlæg i array og vender det om, for at vise de latest posts
$latestpostslatest = array_reverse($blogposts, false);

foreach($latestpostslatest as $value) {
  $blogid = get_post($value);

  echo 
  "<div class='postfeed'>
      <div class='post_headerText'>
        <h3><a href=\"blogpost.php?pid=$value\">$value. $blogid[title]</a></h3>
      </div>
      <div class='post_headerDescription'>
        <p>$blogid[content]</p>
        <p>skrevet af <a href=\"show_user.php?uid=$blogid[uid]\">$blogid[uid]</a></p>
        <p>$blogid[date]</p>
      </div>
    <div class='post_footer'>
      <button class='btn'><i class='fa-solid fa-pen-to-square'></i> Rediger</button>
      <button class='btn'><i class='fa-solid fa-comment'></i> Kommentarer</button>
  </div>
  </div>";
}
}

function testlogin() {
    echo "check if running";
}

function login() {
    echo "check if running";

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
}


?>