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

		    $show_name = clean($_SESSION['show_name']);
			$query = mysql_query("SELECT * FROM shows WHERE show_name='$show_name'");
				
				if($query) {
			
					// While there are results loop through them - fetching an Object (i like PHP5 btw!).
					while ($result = mysql_fetch_object($query)) {
	
					foreach($facebook as $value)
					{
						if(idx($value, 'username') == $result->user_id ||
						$result->user_id == clean($_SESSION['user_id']))
						{
							$add_event = true;
							
							$index += 1;
							break;
						}
						else
						{				
							$add_event = false;
						}
		
					}
					}
					}
					?>
					<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" lang="en">
  <head>
    <meta charset="utf-8" />
	</head>
	</body>
	asdfasd
	<?php>
					if($add_event == true)
					{
							// Format the results, im using <li> for the list, you can change it.
							// The onClick function fills the textbox with the result.
							// YOU MUST CHANGE: $result->value to $result->your_colum
							echo '<p>' + $result->user_id + '</p>';
					}
						
					}

	         		
				} else {
					echo 'ERROR: There was a problem with the query.';
				}
				


				
			

?>
	<form id="im_going" method="post" action="add-going.php">
							<div id="actions">
								<input type="submit" id="imgoing" class="try sprited" value="I'm Going!">
							</div>
							</form>
							<form id="im_out" method="post" action="not-going.php" style="display:none;">
							<div id="actions">
								<input type="submit" id="imout" class="try sprited" value="I'm Out!">
							</div>
							</form>
</body>
</html>