<?php
function addDays($repeatsWhen, $dateToIterate) 
{
				
				if($repeatsWhen == 'Daily')
				{
					$dateToIterate = date("m/d/Y",strtotime(date("m/d/Y", strtotime($dateToIterate)) . " +1 day"));
				}
				else if($repeatsWhen == 'Weekly')
				{
					$dateToIterate = date("m/d/Y",strtotime(date("m/d/Y", strtotime($dateToIterate)) . " +1 week"));
				}
				else if($repeatsWhen == 'Bi-Weekly')
				{
					$dateToIterate = date("m/d/Y",strtotime(date("m/d/Y", strtotime($dateToIterate)) . " +2 week"));
				}
				else if($repeatsWhen == 'Monthly')
				{
					$dateToIterate = date("m/d/Y",strtotime(date("m/d/Y", strtotime($dateToIterate)) . " +1 month"));
				}				
				else if($repeatsWhen == 'Yearly')
				{
					$dateToIterate = date("m/d/Y",strtotime(date("m/d/Y", strtotime($dateToIterate)) . " +1 year"));
				}
				return $dateToIterate;
}

	//Start session
	session_start();
	include("config.php");
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return  mysql_escape_string($str);
	}
	$orgname = clean($_SESSION['ORG_NAME']);

$qProg = "SELECT * FROM programs WHERE orgname='$orgname' and draft='Published'";

$rProg = mysql_query($qProg);

	$totalPrograms[] = array();
	$index = 1;
	
	while($row = mysql_fetch_assoc($rProg))
	{	

		$programName = $row['programname'];
		$q = "SELECT * FROM programrepeats WHERE programname='$programName'";
		$r = mysql_query($q);
		$repeats = mysql_fetch_assoc($r);
		if($row['enddate'] != '')
		{
			$dateToIterate =  $row['date'];
	
			//Need to do one for the initial date
			$totalPrograms[$index]['id'] = $index;
				

			$totalPrograms[$index]['title'] = $row['programname'];
			$totalPrograms[$index]['start'] = $dateToIterate;
			$totalPrograms[$index]['end'] = $dateToIterate;
			$totalPrograms[$index]['url'] = "program-manager.php?programname=";
			$totalPrograms[$index]['url'] .=  $row['programname'];
			$totalPrograms[$index]['url'] .= "&orgname=";
			$totalPrograms[$index]['url'] .= $orgname;			
			
			while((strtotime($dateToIterate)) < strtotime($row['enddate']))
			{
				if($repeats['repeats'] == 'Bi-Weekly')
				{
					$dateToIterate = date("m/d/Y",strtotime(date("m/d/Y", strtotime($dateToIterate)) . " +1 week"));
				}
				else if($repeats['repeats'] == 'Monthly')
				{
					$dateToIterate = date("m/d/Y",strtotime(date("m/d/Y", strtotime($dateToIterate)) . " +1 month"));
					$dateToIterate = date("m/d/Y",strtotime(date("m/d/Y", strtotime($dateToIterate)) . " -1 week"));
				}				
				else if($repeats['repeats'] == 'Yearly')
				{
					$dateToIterate = date("m/d/Y",strtotime(date("m/d/Y", strtotime($dateToIterate)) . " +1 year"));
					$dateToIterate = date("m/d/Y",strtotime(date("m/d/Y", strtotime($dateToIterate)) . " -1 week"));
				}
			
				if($repeats['everysun'] != '')
				{
					$index += 1;
					$nextSun = strtotime('next sunday',strtotime($dateToIterate));
					$dateToIterate = date("m/d/Y", $nextSun);
					$totalPrograms[$index]['id'] = $index;
					$totalPrograms[$index]['title'] = $row['programname'];
					$totalPrograms[$index]['start'] = $dateToIterate;
					$totalPrograms[$index]['end'] = $dateToIterate;
					$totalPrograms[$index]['url'] = "program-manager.php?programname=";
					$totalPrograms[$index]['url'] .=  $row['programname'];
					$totalPrograms[$index]['url'] .= "&orgname=";
					$totalPrograms[$index]['url'] .= $orgname;	
				}
				if($repeats['everymon'] != '')
				{
					$index += 1;
					$nextMon = strtotime('next monday',strtotime($dateToIterate));
					$dateToIterate = date("m/d/Y", $nextMon);
					$totalPrograms[$index]['id'] = $index;
					$totalPrograms[$index]['title'] = $row['programname'];
					$totalPrograms[$index]['start'] = $dateToIterate;
					$totalPrograms[$index]['end'] = $dateToIterate;
					$totalPrograms[$index]['url'] = "program-manager.php?programname=";
					$totalPrograms[$index]['url'] .=  $row['programname'];
					$totalPrograms[$index]['url'] .= "&orgname=";
					$totalPrograms[$index]['url'] .= $orgname;	
				}
				if($repeats['everytues'] != '')
				{
					$index += 1;
					$nextTue = strtotime('next tuesday',strtotime($dateToIterate));
					$dateToIterate = date("m/d/Y", $nextTue);
					$totalPrograms[$index]['id'] = $index;
					$totalPrograms[$index]['title'] = $row['programname'];
					$totalPrograms[$index]['start'] = $dateToIterate;
					$totalPrograms[$index]['end'] = $dateToIterate;
					$totalPrograms[$index]['url'] = "program-manager.php?programname=";
					$totalPrograms[$index]['url'] .=  $row['programname'];
					$totalPrograms[$index]['url'] .= "&orgname=";
					$totalPrograms[$index]['url'] .= $orgname;	
				}
				if($repeats['everywed'] != '')
				{
					$index += 1;
					$nextWed = strtotime('next wednesday',strtotime($dateToIterate));
					$dateToIterate = date("m/d/Y", $nextWed);
					$totalPrograms[$index]['id'] = $index;
					$totalPrograms[$index]['title'] = $row['programname'];
					$totalPrograms[$index]['start'] = $dateToIterate;
					$totalPrograms[$index]['end'] = $dateToIterate;
					$totalPrograms[$index]['url'] = "program-manager.php?programname=";
					$totalPrograms[$index]['url'] .=  $row['programname'];
					$totalPrograms[$index]['url'] .= "&orgname=";
					$totalPrograms[$index]['url'] .= $orgname;	
				}
				if($repeats['everythurs'] != '')
				{
					$index += 1;
					$nextThurs = strtotime('next thursday',strtotime($dateToIterate));
					$dateToIterate = date("m/d/Y", $nextThurs);
					$totalPrograms[$index]['id'] = $index;
					$totalPrograms[$index]['title'] = $row['programname'];
					$totalPrograms[$index]['start'] = $dateToIterate;
					$totalPrograms[$index]['end'] = $dateToIterate;
					$totalPrograms[$index]['url'] = "program-manager.php?programname=";
					$totalPrograms[$index]['url'] .=  $row['programname'];
					$totalPrograms[$index]['url'] .= "&orgname=";
					$totalPrograms[$index]['url'] .= $orgname;	
				}
				if($repeats['everyfri'] != '')
				{
					$index += 1;
					$nextFri = strtotime('next friday',strtotime($dateToIterate));
					$dateToIterate = date("m/d/Y", $nextFri);
					$totalPrograms[$index]['id'] = $index;
					$totalPrograms[$index]['title'] = $row['programname'];
				//	$dateToIterate = addDays($repeats['repeats'],$dateToIterate);
					$totalPrograms[$index]['start'] = $dateToIterate;
					$totalPrograms[$index]['end'] = $dateToIterate;
					$totalPrograms[$index]['url'] = "program-manager.php?programname=";
					$totalPrograms[$index]['url'] .=  $row['programname'];
					$totalPrograms[$index]['url'] .= "&orgname=";
					$totalPrograms[$index]['url'] .= $orgname;	
				}
				if($repeats['everysat'] != '')
				{
					$index += 1;
					$nextSat = strtotime('next saturday',strtotime($dateToIterate));
					$dateToIterate = date("m/d/Y", $nextSat);
					$totalPrograms[$index]['id'] = $index;
					$totalPrograms[$index]['title'] = $row['programname'];
					$totalPrograms[$index]['start'] = $dateToIterate;
					$totalPrograms[$index]['end'] = $dateToIterate;
					$totalPrograms[$index]['url'] = "program-manager.php?programname=";
					$totalPrograms[$index]['url'] .=  $row['programname'];
					$totalPrograms[$index]['url'] .= "&orgname=";
					$totalPrograms[$index]['url'] .= $orgname;	
				}
			}
		}
		else if(($row['enddate'] == '') && ($repeats['repeats'] != ''))//Recurring and no end date, goes forever
		{
			$dateToIterate =  $row['date'];
			
			//Need to do one for the initial date
			$totalPrograms[$index]['id'] = $index;
				

			$totalPrograms[$index]['title'] = $row['programname'];
			$totalPrograms[$index]['start'] = $dateToIterate;
			$totalPrograms[$index]['end'] = $dateToIterate;
			$totalPrograms[$index]['url'] = "program-manager.php?programname=";
			$totalPrograms[$index]['url'] .=  $row['programname'];
			$totalPrograms[$index]['url'] .= "&orgname=";
			$totalPrograms[$index]['url'] .= $orgname;			
			
			while((strtotime($dateToIterate)) < strtotime('12/31/2030'))
			{
				
				if($repeats['repeats'] == 'Bi-Weekly')
				{
					$dateToIterate = date("m/d/Y",strtotime(date("m/d/Y", strtotime($dateToIterate)) . " +2 week"));
				}
				else if($repeats['repeats'] == 'Monthly')
				{
					$dateToIterate = date("m/d/Y",strtotime(date("m/d/Y", strtotime($dateToIterate)) . " +1 month"));
				}				
				else if($repeats['repeats'] == 'Yearly')
				{
					$dateToIterate = date("m/d/Y",strtotime(date("m/d/Y", strtotime($dateToIterate)) . " +1 year"));
				}
				
				if($repeats['everysun'] != '')
				{
					$index += 1;
					$nextSun = strtotime('next sunday',strtotime($dateToIterate));
					$dateToIterate = date("m/d/Y", $nextSun);
					$totalPrograms[$index]['id'] = $index;
					$totalPrograms[$index]['title'] = $row['programname'];
					$totalPrograms[$index]['start'] = $dateToIterate;
					$totalPrograms[$index]['end'] = $dateToIterate;
					$totalPrograms[$index]['url'] = "program-manager.php?programname=";
					$totalPrograms[$index]['url'] .=  $row['programname'];
					$totalPrograms[$index]['url'] .= "&orgname=";
					$totalPrograms[$index]['url'] .= $orgname;	
				}
				if($repeats['everymon'] != '')
				{
					$index += 1;
					$nextMon = strtotime('next monday',strtotime($dateToIterate));
					$dateToIterate = date("m/d/Y", $nextMon);
					$totalPrograms[$index]['id'] = $index;
					$totalPrograms[$index]['title'] = $row['programname'];
					$totalPrograms[$index]['start'] = $dateToIterate;
					$totalPrograms[$index]['end'] = $dateToIterate;
					$totalPrograms[$index]['url'] = "program-manager.php?programname=";
					$totalPrograms[$index]['url'] .=  $row['programname'];
					$totalPrograms[$index]['url'] .= "&orgname=";
					$totalPrograms[$index]['url'] .= $orgname;	
				}
				if($repeats['everytues'] != '')
				{
					$index += 1;
					$nextTue = strtotime('next tuesday',strtotime($dateToIterate));
					$dateToIterate = date("m/d/Y", $nextTue);
					$totalPrograms[$index]['id'] = $index;
					$totalPrograms[$index]['title'] = $row['programname'];
					$totalPrograms[$index]['start'] = $dateToIterate;
					$totalPrograms[$index]['end'] = $dateToIterate;
					$totalPrograms[$index]['url'] = "program-manager.php?programname=";
					$totalPrograms[$index]['url'] .=  $row['programname'];
					$totalPrograms[$index]['url'] .= "&orgname=";
					$totalPrograms[$index]['url'] .= $orgname;	
				}
				if($repeats['everywed'] != '')
				{
					$index += 1;
					$nextWed = strtotime('next wednesday',strtotime($dateToIterate));
					$dateToIterate = date("m/d/Y", $nextWed);
					$totalPrograms[$index]['id'] = $index;
					$totalPrograms[$index]['title'] = $row['programname'];
					$totalPrograms[$index]['start'] = $dateToIterate;
					$totalPrograms[$index]['end'] = $dateToIterate;
					$totalPrograms[$index]['url'] = "program-manager.php?programname=";
					$totalPrograms[$index]['url'] .=  $row['programname'];
					$totalPrograms[$index]['url'] .= "&orgname=";
					$totalPrograms[$index]['url'] .= $orgname;	
				}
				if($repeats['everythurs'] != '')
				{
					$index += 1;
					$nextThurs = strtotime('next thursday',strtotime($dateToIterate));
					$dateToIterate = date("m/d/Y", $nextThurs);
					$totalPrograms[$index]['id'] = $index;
					$totalPrograms[$index]['title'] = $row['programname'];
					$totalPrograms[$index]['start'] = $dateToIterate;
					$totalPrograms[$index]['end'] = $dateToIterate;
					$totalPrograms[$index]['url'] = "program-manager.php?programname=";
					$totalPrograms[$index]['url'] .=  $row['programname'];
					$totalPrograms[$index]['url'] .= "&orgname=";
					$totalPrograms[$index]['url'] .= $orgname;	
				}
				if($repeats['everyfri'] != '')
				{
					$index += 1;
					$nextFri = strtotime('next friday',strtotime($dateToIterate));
					$dateToIterate = date("m/d/Y", $nextFri);
					$totalPrograms[$index]['id'] = $index;
					$totalPrograms[$index]['title'] = $row['programname'];
					$totalPrograms[$index]['start'] = $dateToIterate;
					$totalPrograms[$index]['end'] = $dateToIterate;
					$totalPrograms[$index]['url'] = "program-manager.php?programname=";
					$totalPrograms[$index]['url'] .=  $row['programname'];
					$totalPrograms[$index]['url'] .= "&orgname=";
					$totalPrograms[$index]['url'] .= $orgname;	
				}
				if($repeats['everysat'] != '')
				{
					$index += 1;
					$nextSat = strtotime('next saturday',strtotime($dateToIterate));
					$dateToIterate = date("m/d/Y", $nextSat);
					$totalPrograms[$index]['id'] = $index;
					$totalPrograms[$index]['title'] = $row['programname'];
					$totalPrograms[$index]['start'] = $dateToIterate;
					$totalPrograms[$index]['end'] = $dateToIterate;
					$totalPrograms[$index]['url'] = "program-manager.php?programname=";
					$totalPrograms[$index]['url'] .=  $row['programname'];
					$totalPrograms[$index]['url'] .= "&orgname=";
					$totalPrograms[$index]['url'] .= $orgname;	
				}
				
			}	
		}
		else if(($row['enddate'] == '') && ($repeats['repeats'] == '')) //only one day
		{
			
			$totalPrograms[$index]['id'] = $index;
			$totalPrograms[$index]['title'] = $row['programname'];
			$totalPrograms[$index]['start'] = $row['date'];
			$totalPrograms[$index]['end'] = $row['date'];
			$totalPrograms[$index]['url'] = "program-manager.php?programname=";
			$totalPrograms[$index]['url'] .= $row['programname'];
			$totalPrograms[$index]['url'] .= "&orgname=";
			$totalPrograms[$index]['url'] .= $orgname;
			$index += 1;
		}
		

			
	}
		echo json_encode(
	
		$totalPrograms
	
	);

?>
