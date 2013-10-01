<?php
/**
*   footer.php
*	The page footer file
*	This file contains the HTML tags for the page footer.
*   No information is currently being displayed, just the closing tags.
*
*	@author Isaac Andrade <isaac_nic@gmail.com>
*	@author Guilherme Bentim <guilherme.guizmo@gmail.com>
*	@author Ritchie Fitzgerald <ritchiefitz1@gmail.com>
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

			<div id="NewUser" class="add-user">
				<h4 class="center">Add User</h4>
				<br>
				<form action="login.php" method="post" onsubmit="return verifyPassword()">
					<label for="adduser">New Username:</label>
					<input name="adduser" type="text" required>
					<br>
					<br>
					<div class="clear-fix"></div>
					<label for="addpassword">New Password:</label>
					<input name="addpassword" type="password" required>
					<br>
					<br>
					<div class="clear-fix"></div>
					<label for="verifypassword">Verify Password:</label>
					<input name="verifypassword" type="password" required>
					<br>
					<br>
					<p id="failedpassword" class='fail hide center'>Passwords don't match!!</p>
					<br>
					<div class="clear-fix"></div>
					<div class="controls">
						<input name="addsubmit" class="button" type="submit" value="Add User">
						<input type="reset" class="button" value="Clear">
					</div>
				</form>
			</div>
		<div id="footer">
			<!-- Here we are going to put info about the service and the I~Comm Department -->
		</div>
	</div> <!-- END of #page-wrapper -->
</body>

</html>