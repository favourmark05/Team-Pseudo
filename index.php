<?php
$warning="";
if(count($_POST)>0) {
	$info = json_decode(file_get_contents("info.json"));	
}
$email = $_POST["email"];
// $name = $_POST["name"];
$password = $_POST["password"];
//$confirmpassword = $_POST["confirmpassword"];
	
if(in_array($email ,array_column($info, 'email')) && in_array($password, array_column($info, "password"))){
		//$warning = "This email has been registered";
	
	session_start();
	$_SESSION["user_login"] = $name;
	header("Location: success.php")
}else{
	$warning = "Email or password incorrect";
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
			<h2>Log In</h2>
			<form name="frmUser" method="post" action="" method="POST" class="container">
				<div class="message"><?php if($warning!="") { echo $warning; } ?></div>
				<input type="text" name="email" placeholder="email" required="">
				<input type="password" name="password" placeholder="password" required="">
				<input type="submit" name="submit" value="Login">	
				<p>New here? <a href="registration.php">Sign Up</a></p>
			</form>
		</div>
</body>
</html>