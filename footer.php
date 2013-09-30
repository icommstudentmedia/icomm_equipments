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


    //this statement checks if the user is logged in and has admnistrative rights to 
    //access the information displayed
	if (!isset($_SESSION)) 
	{
	    header('Location: login.php');
	}
?>				
				</table>
			</div> <!-- END of #data-table -->
	
		<div id="footer">
			<!-- Here we are going to put info about the service and the I~Comm Department -->
		</div>
	</div> <!-- END of #page-wrapper -->
</body>

</html>