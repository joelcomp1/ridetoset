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
	$show_name = clean($_POST['showname']);
	$call_time = clean($_POST['calltime']);
	$call_date = clean($_POST['showdate']);
	$call_city = clean($_POST['city']);
	$call_state = clean($_POST['state']);
	

		if($show_name == '') {
			$errmsg_arr[] = 'Show Name Missing';
			$errflag = true;
		}
		if($call_time == '') {
			$errmsg_arr[] = 'Call Time Missing';
			$errflag = true;
		}
		if($call_city == '') {
			$errmsg_arr[] = 'City Missing';
			$errflag = true;
		}
		if($call_state == 'Select a State') {
			$errmsg_arr[] = 'State Missing';
			$errflag = true;
		}
		if($call_date == '') {
			$errmsg_arr[] = 'Call Date Missing';
			$errflag = true;
		}
		else if(strtotime($call_date) < strtotime(date('D M d Y')))
		{
			$errmsg_arr[] = 'Date is in the past.';
			$errflag = true;
		}
			
		if($show_name != '') {
			$qry = "SELECT * FROM shows WHERE show_name='$show_name'";
			$result = mysql_query($qry);
			if($result) {
				if(mysql_num_rows($result) > 0) {
					
				}
				@mysql_free_result($result);
			}
			else {
				die("Query failed");
			}
		}
		if($errflag) {
	

		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	
		header("location: index.php");
		
		exit();
	}
	

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