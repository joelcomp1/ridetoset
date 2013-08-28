<?php

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
	$user_id = clean($_SESSION['user_id']);
	$show_name = clean($_SESSION['show_name']);
	$call_time = clean($_SESSION['calltime']);
	$call_date = clean($_SESSION['showdate']);
	$call_city = clean($_SESSION['city']);
	$call_state = clean($_SESSION['state']);
	
	$qry = "INSERT INTO shows(user_id, show_name, call_date, call_time, city, state) 
	    				VALUES('$user_id','$show_name','$call_date','$call_time', '$call_city', '$call_state')";
	$result = @mysql_query($qry);
	    
	
	//Check whether the query was successful or not
	if($result) {
			//create program part 1 Successful
			session_regenerate_id();
		
			header("location: index.php");
			
			session_write_close();
			exit();
	}else {
	echo 	$user_id;
	echo 	$show_name;
	echo 	$call_time;
	echo 	$call_date;
	    var_dump($result);
		die("Query failed");
	}
	
	mysql_close($link);
?>