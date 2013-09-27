<?php
	if (!isset($_SESSION)) 
	{
		header('Location: login.php');
	}
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
							<li>Rejected</li> <!-- Subcategories: Not Authorizes, No Equipment -->
							<li>Prepared</li> <!-- Prepped -->
							<li>Picked-up</li>
							<li>Returned</li>
						</ul>
					</nav>
				</div>
	
			</div> <!-- END of #header -->
	
	
			<div id="data-table">
				<table>