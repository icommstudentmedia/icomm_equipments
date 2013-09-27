<?php

function connect_to_db()
{
	define("DB_HOST", "127.0.0.1");
	define("DB_USER", "ritchie");
	define("DB_PASSWORD", "!Information1");
	define("DB_NAME", "users");

	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error " . mysqli_error($link));
	return $link;
}

function password_encrypt($password)
{
	$hash_format = "$2y$10$";
	$salt = generate_salt();
	$format_and_salt = $hash_format . $salt;
	$hash = crypt($password, $format_and_salt);
	return $hash;
}

function generate_salt()
{
	$unique_string = md5(uniqid(mt_rand(), true));
	$base64_string = base64_encode($unique_string);
	$modified_base64 = str_replace("+", ".", $base64_string);
	$salt = substr($modified_base64, 0, 22);
	return $salt;
}

function get_header()
{
	include 'header.php';
}

function get_footer()
{
	include 'footer.php';
}

function logged_in()
{
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}

?>