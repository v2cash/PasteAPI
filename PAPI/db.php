<?php
/*
	    ____  ___    ____  ____
	   / __ \/   |  / __ \/  _/
      / /_/ / /| | / /_/ // /  
     / ____/ ___ |/ ____// /   
	/_/   /_/  |_/_/   /___/   
	Paste API By 2cash

*/

	$host = "localhost";
		$db = "papi";
		$user = "root";
		$password = "";
				
	$db_connection = mysqli_connect($host, $user, $password, $db);
	
	if(!$db_connection)
	{
		die("Opps,<br>There seems to be an Issue with the database. Please check your connection settings.");
	}
	
	
?>