<?php
	//Start session
	session_start();
	
	//Include database connection details
	include("AppInfo.php");
	include('utils.php');
	//Array to store validation errors
	$errmsg_arr = array();
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return  mysql_escape_string($str);
	}
	//Validation error flag
	$errflag = false;
	$add_event = false;
	$facebook = $_SESSION['facebook']; 

		// Is there a posted query string?
		if(isset($_POST['queryString'])) {

			$queryString = mysql_escape_string($_POST['queryString']);

			// Is the string length greater than 0?
			
			if(strlen($queryString) >0) {

				// Run the query: We use LIKE '$queryString%'
				// The percentage sign is a wild-card, in my example of countries it works like this...
				// $queryString = 'Uni';
				// Returned data = 'United States, United Kindom';
				
				// YOU NEED TO ALTER THE QUERY TO MATCH YOUR DATABASE.
				// eg: SELECT yourColumnName FROM yourTable WHERE yourColumnName LIKE '$queryString%' LIMIT 10
				
				$query = mysql_query("SELECT show_name, user_id FROM shows WHERE show_name LIKE '$queryString%' LIMIT 25");

				if($query) {
			
					// While there are results loop through them - fetching an Object (i like PHP5 btw!).
					while ($result = mysql_fetch_object($query)) {
	
					foreach($facebook as $value)
					{
						if(idx($value, 'username') == $result->user_id ||
						$result->user_id == clean($_SESSION['user_id']))
						{
							$add_event = true;
							break;
						}
						else
						{				
							$add_event = false;
						}
		
					}
					if($add_event == true)
					{
							// Format the results, im using <li> for the list, you can change it.
							// The onClick function fills the textbox with the result.
							$_SESSION['showName'] = $result->show_name;
							// YOU MUST CHANGE: $result->value to $result->your_colum
							echo '<li onClick="fillTags(\''.$result->show_name.'\');">'.$result->show_name.'</li>';
					}
						
					}

	         		
				} else {
					echo 'ERROR: There was a problem with the query.';
				}
				


				
			} else {
				// Dont do anything.
			} // There is a queryString.
		} else {
			echo 'There should be no direct access to this script!';
		}

?>