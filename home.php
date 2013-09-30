<?php 
/**
*   home.php
*	This file contains the HTML tags for the main content of the page.
*
*	@author Isaac Andrade
*	@author Guilherme Bentim (guilherme.guizmo@gmail.com)
*	@author Ritchie Fitzgerald
*
*	@link byuicomm.net/icomm_equipments/  (main content)
*
*	@version 1.0
*/

    //this statement checks if the user is logged in and has admnistrative rights to 
    //access the information displayed
	if (!isset($_SESSION)) 
	{
	  session_start();
	}

    //includes the functions in 'functions.php'
	include 'functions.php';

	 if (logged_in())
	{
		get_header();
?>
				
					<thead>
						<tr>
							<th>Date Created</th>
							<th>Reporter Name</th>
							<th>Group</th>
							<th>Requested Equipment</th>
							<th>Checkout Date</th>
							<th>Checkout Time</th>
							<th>Checkin Date</th>
							<th>Checkin Time</th>
							<th>Comment</th>
							<th>Status</th>
						</tr>
					</thead>


<?php 
		get_footer();
	}
	else
	{
		header('Location: login.php');
	}

?>