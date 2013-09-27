<?php 
	if (!isset($_SESSION)) 
	{
	  session_start();
	}

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