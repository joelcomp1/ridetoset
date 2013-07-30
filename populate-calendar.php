<?php

	//Start session
	session_start();
	include("AppInfo.php");
	
$facebook = $_SESSION['facebook'];
		
		
//$user_id = $facebook->getUser();
/*if ($user_id) {
  try {
    // Fetch the viewer's basic information
    $basic = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    // If the call fails we check if we still have a user. The user will be
    // cleared if the error is because of an invalid accesstoken
    if (!$facebook->getUser()) {
      header('Location: '. AppInfo::getUrl($_SERVER['REQUEST_URI']));
      exit();
    }
  }

  $app_using_friends = $facebook->api(array(
    'method' => 'fql.query',
    'query' => 'SELECT uid, name FROM user WHERE uid IN(SELECT uid2 FROM friend WHERE uid1 = me()) AND is_app_user = 1'
  ));

}*/
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
	
		/*foreach($app_using_friends as $value)
		{
		 if(idx($value, 'uid') == $row['user_id'])
		 {
			$add_event = true;
			break;
		 }
		
		}*/
	/*	if($add_event == true)
		{
			$totalPrograms[$index]['id'] = $index;
			$totalPrograms[$index]['title'] = $row['show_name'];
			$totalPrograms[$index]['start'] = "Wed, 18 Oct 2009 13:00:00 EST"$row['call_date'];
		//	$totalPrograms[$index]['end'] = $row['date'];
		//	$totalPrograms[$index]['url'] = "program-manager.php?programname=";
			//$totalPrograms[$index]['url'] .= $row['programname'];
		//	$totalPrograms[$index]['url'] .= "&orgname=";
		//	$totalPrograms[$index]['url'] .= $orgname;
			$index += 1;
		}
		
			*/

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
			$totalPrograms[$index]['url'] .= $user_id;

			$index += 1;
	}
	
		echo json_encode(
	
		$totalPrograms
	
	);

?>
