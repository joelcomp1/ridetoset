<?php
	//Start session
	session_start();
	
	//Include database connection details
	include('AppInfo.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return  mysql_escape_string($str);
	}
	

	$qry = "INSERT INTO shows(id_inviter, id_request, status, updated_at, created_at) 
	    				VALUES('$login','$loginRequest','REQUEST_SENT','$todaysDate','$todaysDate')";
	$result = @mysql_query($qry);
	    
	
	//Check whether the query was successful or not
	if($result) {
			//create program part 1 Successful
			session_regenerate_id();
		
			header("location: vol-manager.php?vol=$loginRequest");
			
			session_write_close();
			exit();
	}else {
		die("Query failed");
	}
	
	mysql_close($link);
?>