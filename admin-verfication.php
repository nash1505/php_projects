<?php
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","news");
	$result = mysqli_query($conn,"SELECT * FROM npe WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {


		$message = "Invalid Username or Password!";
	} else {
			header("Location:dashboard.php");
		$message = "You are successfully authenticated!";
	}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin Verification</title>
</head>
<body>
<form method="post" action="">
	<div>
	<h1>Admin LOGIN</h1>
	<label>
		Username :
	</label>
	<input type="text" name="username">
	<br>
	<br>
	<label>
		Password :
	</label>

	<input type="password" name="password">
	<br>
	<br>
	<?php if($message!="") { echo $message; } ?>
	<button name="submit" type="submit" >Submit</button>
	</div>
</form>
</body>
</html>