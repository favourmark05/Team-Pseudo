<?php
$warning="";
$loggedIn="";
if(count($_POST)>0) {
	$info = json_decode(file_get_contents("info.json"));
	$email = $_POST["email"];
	
	$password = $_POST["password"];
	//$confirmpassword = $_POST["confirmpassword"];


	
	if(in_array($email ,array_column($info, 'email')) && in_array($password, array_column($info, "password"))){
		//$warning = "This email has been registered";
		// $name = $info->name;
		$loggedIn = "Log in successful";
		session_start();
		$_SESSION["user_login"] = "You";
		header("Location: success.php");
	}else{
		$warning = "Email or password incorrect";
	}
}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./CSS/login.css">
</head>
<body>
		<div class="content">
			<h2>Login</h2>
			<form name="frmUser" method="post" action="" method="POST" class="container">
				<div class="message"><?php if($warning!="") { echo $warning; } ?></div>
				<input type="email" name="email" placeholder="email" required>
				<input type="password" name="password" placeholder="password" required>
				<input style="border: 0; width: 280px; padding: 14px 10px; border-radius: 20px; background: #205c70; color: white;" class="loginbutton" type="submit" name="submit" value="Login">	
				<div class="successmessage"><?php if($loggedIn!="") { echo $loggedIn; } ?></div>
				<p>New here? <a href="registration.php">Sign Up</a></p>
			</form>
		</div>
</body>
</html>