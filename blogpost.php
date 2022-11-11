<!DOCTYPE html>
<html>
<html lang='en'>
  <head>
    <title>Blogpost</title>
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

<a href="https://wits.ruc.dk/~segura/test">Hjem til blokken - Im still Sune at the blok</a>

<?php
  require_once "/home/mir/lib/db.php";

    $pid = $_GET['pid'];
    $post = get_post($pid);
		$user = get_user($post['uid']);
		$imageid = get_iids_by_pid($pid);
		$uid = $_GET["uid"];

if (strtolower($uid) == strtolower($user['uid'])) {

		echo	'<form action="themodifier.php" method="get">
			 <input type="hidden" name="pid" style="width:400px;" value="',$pid,'"><br>
				<br> <input type="text" name="title" style="width:400px;" value="',$post['title'],'"><br>
				<br> <input type="text" name="content" style="height:500px; width:300px;" value="',$post['content'],'">
					<input type="submit">
				</form>';


		}

else {
	echo $uid, $user['uid'];
	echo '<h1>','<em>', $post['title'],'</em>','</h1>';
	echo "<br>";
	echo $post['content'];
	echo "<br>";


	foreach($imageid as $value) {
		$image = get_image($value);
		$imagepath = $image['path'];
		echo '<img src="'  . $imagepath . '">';
	}
	echo '<br>';
	echo 'posted by ','<strong>', '<a href="vis_bruger.php?uid=' . $user['uid'] . '">', $user['firstname'],' ',$user['lastname'],'</a>','</strong>';
	echo "<br>";

	echo "<hr size='9' width='100%' color='green'>";
	echo "Comments: ";
	echo "<br>";


// loop through all comments and then check if they have the same pid as the current blogpost

for ($i = 0; $i < 30; $i++) {
$commentid = get_comment($i);
if ($commentid['pid'] == $post['pid']) {
echo $commentid['content'];
echo " - ", '<a href="vis_bruger.php?uid=' . $commentid['uid'] . ' ">' . $commentid['uid'] . '</a>';
echo "<br>";
}
}

echo "<br>";
echo "<br>";


}




  ?>
</body>
	</html>
