<?php
/**
*   login.php
*	This file contains the HTML tags for the login page and
*   also the functions calls to access the database and check the user and password.
*   This will be the first page displayed.
*
*	@author Isaac Andrade
*	@author Guilherme Bentim (guilherme.guizmo@gmail.com)
*	@author Ritchie Fitzgerald
*
*	@link byuicomm.net/icomm_equipments/  (login page)
*
*	@version 1.0
*/

	session_start();
	require_once("functions.php");

	if (isset($_POST['logout']))
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
			</form>
		</div>
	</body>
<?php
$link = connect_to_db();

if (isset($_POST['submit']))
{
	$username = mysqli_real_escape_string($link, $_POST['username']);
	$password = $_POST['password'];

	$query = "SELECT * FROM admins WHERE username='{$username}'";
	$result = mysqli_query($link, $query);

	if ($row = mysqli_fetch_assoc($result))
	{
		$set_password = $row['password'];
		$input_password = crypt($password, $set_password);

		if ($input_password == $set_password)
		{
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $username;
			header('Location: home.php');
		}
		else
		{
			echo "Username or Password Incorrect";
		}
	}
	else
	{
		echo "failed";
	}

}
?>