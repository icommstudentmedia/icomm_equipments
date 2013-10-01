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
	<script type="text/javascript">
			function showDiv()
			{
				document.getElementById('NewUser').style.display = "block";
			}
			function hideDiv()
			{
				document.getElementById('NewUser').style.display = "none";
			}
			function verifyPassword()
			{
				var password = document.getElementsByName('addpassword')[0].value;
				var verify = document.getElementsByName('verifypassword')[0].value;

				if (password == verify)
				{
					hideDiv();
					return true;
				}
				else
				{
					document.getElementById('failedpassword').style.display = "block";
					return false;
				}
			}
		</script>
</head>

<body>

	<div id="page-wrapper">

		<div id="header">
	
				<div id="nav-menu">
				<h4>Welcome back <?php echo $_SESSION['username'];?>!</h4>
					<form action="login.php" method="post">
						<input name="logout" type="submit" class="button" value="Log Out">
					</form>
					<button class="button" onclick="showDiv()">Add Admin</button>
					<nav>
						<ul>
							<li>Admin Panel</li>
							<li>New Equipment Request</li>
							<li>New Facilities Request</li>
							<li>Logout</li>
							<li id="search-bar">
								<form method="get" action="">
									<input type="text" name="search-text" />
									<button class="button">Search</button>
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