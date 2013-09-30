<?php 
/**
*   home.php
*	This file contains the HTML tags for the main content of the page.
*
*	@author Isaac Andrade <isaac_nic@gmail.com>
*	@author Guilherme Bentim <guilherme.guizmo@gmail.com>
*	@author Ritchie Fitzgerald <ritchiefitz1@gmail.com>
*
*	@link byuicomm.net/icomm_equipments/  (main content)
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

?>