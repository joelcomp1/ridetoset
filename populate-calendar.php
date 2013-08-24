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

	$qProg = "SELECT * FROM shows";

    $rProg = mysql_query($qProg);

	$totalPrograms[] = array();
	$index = 1;
	$add_event = false;
	
		
	while($row = mysql_fetch_assoc($rProg))
	{	
	
		foreach($facebook as $value)
		{
		 if(idx($value, 'username') == $row['user_id'] ||
		 $row['user_id'] == clean($_SESSION['user_id']))
		 {
			$add_event = true;
			break;
		 }
		 else
		 {
			$add_event = false;
		 }
		
		}
		
		
		/*see if event already exists*/
		foreach($totalPrograms as &$show)
		{
			if($show['title'] == $row['show_name'])
			{
				$concat = $row['call_date'] . ' ' . $row['call_time'];
				$datetimeoldformat = date("Y/m/d g:i", strtotime($concat)); 
				$datetime = new DateTime($datetimeoldformat);
				$firstDate = date_format($show['start'], 'Ymd');
				$secondDate = date_format($datetime->format(DateTime::ISO8601), 'Ymd');
				/*see if the existing show is later or eariler*/
				if($firstDate == $secondDate)
				{
					$firstTime = date_format($datetime->format(DateTime::ISO8601), 'H:i:s');
					$secondTime = date_format($show['start'],  'H:i:s');
					$add_event = false;
					if(firstTime <= $secondTime)
					{
						$show['start'] = $datetime->format(DateTime::ISO8601);
					}
										
				}
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
			$totalPrograms[$index]['currentTimezone'] = "America/Los_Angeles";
			currentTimezone
			/*$totalPrograms[$index]['url'] = "index.php?showname=";
			$totalPrograms[$index]['url'] .= idx($value, 'username');
*/
			$index += 1;
			$add_event = false;
		}
		
			

	
	}
	
		echo json_encode(
	
		$totalPrograms
	
	);

?>
