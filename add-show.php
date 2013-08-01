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
	
	

		if($show_name == '') {
			$errmsg_arr[] = 'Show Name Missing';
			$errflag = true;
		}
		if($call_time == '') {
			$errmsg_arr[] = 'Call Date Missing';
			$errflag = true;
		}
		if($call_date == '') {
			$errmsg_arr[] = 'Call Time Missing';
			$errflag = true;
		}
		else if(strtotime($call_date) < strtotime(date('D d MM yy')))
		{
			$errmsg_arr[] = 'Date is in the past.';
			$errflag = true;
		}

		$errmsg_arr[] = $call_date;
			$errmsg_arr[] = date('D d MM yy');
			$errflag = true;
			
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
	
		//These are just to help the user if there is a fail, they will be unset later
		/*$_SESSION['FIRST_NAME'] = $firstName;
		$_SESSION['LAST_NAME'] = $lastName;
		$_SESSION['POSITION_IN_ORG'] = $posInOrg;
		$_SESSION['PHONE_PART_1'] = $phoneAreaCode;
		$_SESSION['PHONE_PART_2'] = $phonePart2;
		$_SESSION['PHONE_PART_3'] = $phonePart3;*/

		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	
		header("location: index.php");
		
		exit();
	}
	

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
	    var_dump($result);
		die("Query failed");
	}
	
	mysql_close($link);
?>