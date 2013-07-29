<?php

	
	//Include database connection details
	//include('AppInfo.php');
	session_start();
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
	$user_id = $_SESSION['user_id'];
	$show_name = clean($_POST['showname']);
	$call_time = clean($_POST['calltime']);
	$call_date = clean($_POST['showdate']);
	var_dump($_SESSION['user_id']);
/*
	$qry = "INSERT INTO shows(user_id, show_name, call_date, call_time) 
	    				VALUES('$user_id','$show_name','$call_date','$call_time')";
	$result = @mysql_query($qry);
	    
	
	//Check whether the query was successful or not
	if($result) {
			//create program part 1 Successful
			session_regenerate_id();
		
			header("location: index.php");
			
			session_write_close();
			exit();
	}else {
		die("Query failed");
	}
	
	mysql_close($link);*/
?>