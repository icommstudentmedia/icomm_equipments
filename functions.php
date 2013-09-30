<?php
/**
*   FUNCTIONS.PHP
*	This file is the home of most back-end functions.
*   It stores most of the functions used in other files in addition to pre-set wordpress functions.
*
*	@author Isaac Andrade
*	@author Guilherme Bentim <guilherme.guizmo@gmail.com>
*	@author Ritchie Fitzgerald <ritchiefitz1@gmail.com>
*
*	@version 1.0
*/


/**
*   Connect to Database
*	This function connects to the mySql Database and returns a link
*
*	@author Ritchie Fitzgerald
*   @return string $link (link to the database) 
*	@version 1.0
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
*   Password Encrypt
*   Encrypts a given password
*
*	@author Ritchie Fitzgerald
*   @param string $password (New password for a user)
*   @return string $hash  (New encrypted password that we would store in the database)
*   @see http://php.net/manual/en/function.password-hash.php
*	@version 1.0
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
*   Generate Salt
*   Generates a random string of letters everysingle time.
*
*	@author Ritchie Fitzgerald
*   @return string $salt  (A random string of letters.)
*   @see http://www.php.net/manual/en/function.crypt.php
*	@version 1.0
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
*   Logged In
*   This function is called several times to make sure that the user is
*   logged in and has admnistrative rights to access the content.
*
*	@author Ritchie Fitzgerald 
*	@version 1.0
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