<?php
/**
*   footer.php
*	The page footer file
*	This file contains the HTML tags for the page footer.
*   No information is currently being displayed, just the closing tags.
*
*	@author Isaac Andrade
*	@author Guilherme Bentim (guilherme.guizmo@gmail.com)
*	@author Ritchie Fitzgerald
*
*	@link byuicomm.net/icomm_equipments/  (footer)
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
				</table>
			</div> <!-- END of #data-table -->
	
		<div id="footer">
			<!-- Here we are going to put info about the service and the I~Comm Department -->
		</div>
	</div> <!-- END of #page-wrapper -->
</body>

</html>