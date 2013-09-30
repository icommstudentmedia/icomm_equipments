<?php
/**
 * LOGIN.PHP
 * 
 * Description: Controls the user logging in and logging out. Also sets the 
 * session variable to let other pages know whether the user has logged in or
 * not.
 *
 * @author Ritchie Fitzgerald <ritchiefitz1@gmail.com>
 * @link byuicomm.net/icomm_equipments/  (login page)
 */

	session_start();                  // Start a new session.
	require_once("functions.php");

	if (isset($_POST['logout']))      // When the user clicks on log off run this.
	{
		session_destroy();
	}
?>
<!DOCTYPE html>
<html lang="eng">
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="style/screen.css">
		<link rel="stylesheet" type="text/css" href="style/login.css">
	</head>
	<body>
		<div class="page-wrapper">
			<form action="" method="post">
				<label for="username">Username:</label>
				<input name="username" type="text">
				<div class="clear-fix"></div>
				<br>
				<label for="password">Password:</label>
				<input name="password" type="password">
				<div class="clear-fix"></div>
				<br>
				<div class="controls">
					<input name="submit" class="button" type="submit" value="Login">
					<input type="reset" class="button" value="Clear">
				</div>
				<div class="center">	
<?php

$link = connect_to_db();             // Connects to Database

if (isset($_POST['submit']))         // When they press login it runs this.
{
	$username = mysqli_real_escape_string($link, $_POST['username']);
	$password = $_POST['password'];

	$query = "SELECT * FROM admins WHERE username='{$username}'";
	$result = mysqli_query($link, $query);

	if ($row = mysqli_fetch_assoc($result))
	{
		// Password are encrypted, so to compare passwords we crypt the
		// new password with the old one to compare.
		$set_password = $row['password'];
		$input_password = crypt($password, $set_password);

		// If they are the same set the session variable, and redirect them.
		if ($input_password == $set_password)
		{
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $username;
			header('Location: home.php');
		}
		else
		{
			// TODO Make this look nicer!!
			echo "<br><p class='fail'>Username or Password Incorrect</p>";
		}
	}
	else
	{
		// TODO Make this look nicer!!
		echo "<br><p class='fail'>Username or Password Incorrect</p>";
	}

}
?>
				</div>
			</form>
		</div>
	</body>
</html>
