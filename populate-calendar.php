<?php

	//Start session
	session_start();
	include("AppInfo.php");
	include('utils.php');

$facebook = $_SESSION['facebook'];
		
	
function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return  mysql_escape_string($str);
	}
	$orgname = clean($_SESSION['ORG_NAME']);

	$qProg = "SELECT * FROM shows";

    $rProg = mysql_query($qProg);

	$totalPrograms[] = array();
	$index = 1;
	$add_event = false;
	
		
	while($row = mysql_fetch_assoc($rProg))
	{	
	
		foreach($facebook as $value)
		{
		 if(idx($value, 'username') == $row['user_id'])
		 {
			$add_event = true;
			break;
		 }
		
		}
		if($add_event == true)
		{
			$concat = $row['call_date'] . ' ' . $row['call_time'];
			$datetimeoldformat = date("Y/m/d g:i", strtotime($concat)); 
			$datetime = new DateTime($datetimeoldformat);
			$endtime = new DateTime($datetimeoldformat);
			$endtime->modify("+30 minutes");
			$totalPrograms[$index]['id'] = $index;
			$totalPrograms[$index]['title'] = $row['show_name'];
			$totalPrograms[$index]['start'] = $datetime->format(DateTime::ISO8601);
			$totalPrograms[$index]['allDay'] = false;
			$totalPrograms[$index]['end'] =  $endtime->format(DateTime::ISO8601);
			$totalPrograms[$index]['url'] = "index.php?showname=";
			$totalPrograms[$index]['url'] .= idx($value, 'username');

			$index += 1;
			$add_event = false;
		}
		
			

	
	}
	
		echo json_encode(
	
		$totalPrograms
	
	);

?>
