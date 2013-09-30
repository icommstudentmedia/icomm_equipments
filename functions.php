<?php
/**
 * FUNCTIONS.PHP
 *
 * Description: Contains functions that we will use for the rest of the site.
 *
 * @author Ritchie Fitzgerald <ritchiefitz1@gmail.com>
 * @author Isaac Andrade <>
 * @author Guilherme Bentim <>
 * 
 */

/**
 * Connects and returns a link to the database.
 * 
 * @return connection The connection to the database.
 */
function connect_to_db()
{
	define("DB_HOST", "127.0.0.1");
	define("DB_USER", "ritchie");
	define("DB_PASSWORD", "!Information1");
	define("DB_NAME", "users");

	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error " . mysqli_error($link));
	return $link;
}

/**
 * Encrypts a given password.
 * 
 * @param  string $password New password for a user.
 * @return string           This is the encrypted password that we would store in the database.
 */
function password_encrypt($password)
{
	$hash_format = "$2y$10$";
	$salt = generate_salt();
	$format_and_salt = $hash_format . $salt;
	$hash = crypt($password, $format_and_salt);
	return $hash;
}

/**
 * Generates a random string of letters everysingle time.
 * 
 * @return string A random string of letters.
 */
function generate_salt()
{
	$unique_string = md5(uniqid(mt_rand(), true));
	$base64_string = base64_encode($unique_string);
	$modified_base64 = str_replace("+", ".", $base64_string);
	$salt = substr($modified_base64, 0, 22);
	return $salt;
}

/**
 * Display the header.
 */
function get_header()
{
	include 'header.php';
}

/**
 * Display the footer.
 */
function get_footer()
{
	include 'footer.php';
}

/**
 * Check to see if a user is logged in or not.
 */
function logged_in()
{
	// If these variables are not set the user is not logged in, so redirect to login.php.
	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== true)
	{
		header('Location: login.php');
	}
}

?>