<?php

	require_once 'functions.php';
	
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	// If the user has not logged in redirect to login page.
	logged_in();
?>				
				</table>
			</div> <!-- END of #data-table -->
	
		<div id="footer">
			<!-- Here we are going to put info about the service and the I~Comm Department -->
		</div>
	</div> <!-- END of #page-wrapper -->
</body>

</html>