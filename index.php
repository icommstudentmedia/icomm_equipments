<?php
	/**
	*	The controller.
	*	This file is the home of all control functions.
	*	It also is the home file users will hit when they come to the domain.
	*	From here the application will:
	*		1. Return to the View
	*		2. Send data to the model
	*		3. Get data from the model
	*
	*	@author Isaac Andrade
	*	@author Guilherme Bentim
	*	@author Ritchie Fitzgerald
	*
	*	@link byuicomm.net/icomm_equipments/
	*
	*	@version 1.0
	*/

	// TODO add login condition to show the homepage, otherwise, go to login page.
	site_home();

	function site_header() {
		if(file_exists('header.php')) {
			require_once 'header.php';
		}
	}

	// do not make it require home.php for now.
	function site_home() {
		if(file_exists('home.php')) {
			include 'home.php';
		}
	}

	function site_footer() {
		if(file_exists('footer.php')) {
			require_once 'footer.php';
		}

	}





?>