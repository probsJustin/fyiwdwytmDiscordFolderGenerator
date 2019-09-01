<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Red+Hat+Text&display=swap" rel="stylesheet">
</head>
<body>

<div class="submit">
	<h1>Discord ID Temp Generator</h1>
	<form action="index.php" method="post" enctype="multipart/form-data">
		Discord ID:
		<input type="text" name="discordID" value="fyiwdwytm">
		<input type="submit" value="Submit" name="submit">
	</form>


</body>
</html>

<?php 
$baseurl = "http://159.65.230.151";
if(isset($_POST['discordID'])){
	if(mkdir("/var/www/html/discordidtool/" . $_POST['discordID'], 0777, true)){
		file_put_contents("/var/www/html/discordidtool/". $_POST['discordID'] . "/tmpfile.png", fopen("https://memebomb.net/wp-content/uploads/2019/03/tell-me-what-to-do-meme-3.jpg", 'r'));
		echo $baseurl . "/discordidtool/" . $_POST['discordID'] . "/tmpfile.png";
	}else{
		echo "it broke or already exists";
	}
	//uncomment this if you need to see the user you are using to set perms for them
	//echo posix_getpwuid(posix_geteuid())['name'];
}

?>

</div>



