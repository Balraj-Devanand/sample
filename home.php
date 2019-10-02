<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class ="header">
</div>
<h1>Home</h1>
<div><h4>welcome newuser<?php echo $_SESSION['username']; ?></h4></div>
</body>
</html>	