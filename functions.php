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

?>