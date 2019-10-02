<?php
session_start();
//connect to database
$db =mysqli_connect("localhost", "root", "", "registration");

if (isset($POST['btn'])) {
	session_start();
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$password2 = mysql_real_escape_string($_POST['password2']);

	if ($password == $password2) 
	{
		//create user
		$password = md5($password); //hash password before storing for security purpose
		$sql =  "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";
		mysqli_query($db, $sql);
		$_SESSION['message'] = "you are logged in";
		$_SESSION['username'] = $username;
		header('locatiom: home.php'); //redirect to homepage 
	}
	else 
	{
		$_SESSION['message'] = "The password doesnot match";
	}
}
?>