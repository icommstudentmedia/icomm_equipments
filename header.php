<?php
/**
*   header.php
*	The page header file
*	This file contains the HTML tags for the basic information about the users and equipments
*   A table is used to organize the information in the header.
*
*	@author Isaac Andrade <isaac_nic@gmail.com>
*	@author Guilherme Bentim <guilherme.guizmo@gmail.com>
*	@author Ritchie Fitzgerald <ritchiefitz1@gmail.com>
*
*	@link byuicomm.net/icomm_equipments/  (header)
*
*	@version 1.0
*/

	require_once 'functions.php';

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	// If the user has not logged in redirect to login page.
	logged_in();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Equipment/Facilities</title>
	<link rel="stylesheet" href="style/screen.css">
</head>

<body>

	<div id="page-wrapper">

		<div id="header">
	
				<div id="nav-menu">
				<h4>Welcome back <?php echo $_SESSION['username'];?>!</h4>
					<form action="login.php" method="post">
						<input name="logout" type="submit" value="Log Out">
					</form>
					<nav>
						<ul>
							<li>Admin Panel</li>
							<li>New Equipment Request</li>
							<li>New Facilities Request</li>
							<li>Logout</li>
							<li id="search-bar">
								<form method="get" action="">
									<input type="text" name="search-text" />
									<button>Search</button>
								</form>
							</li>
						</ul>
					</nav>
				</div>
	
				<div id="nav-tabs">
					<nav>
						<ul>
							<li>Submitted</li>
							<li>Approved</li>
							<li>Rejected</li> <!-- Subcategories: Not Authorized, No Equipment -->
							<li>Prepared</li> <!-- Prepped -->
							<li>Picked-up</li>
							<li>Returned</li>
						</ul>
					</nav>
				</div>
	
			</div> <!-- END of #header -->
	
	
			<div id="data-table">
				<table>