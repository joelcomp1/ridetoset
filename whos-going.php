<?php
	//Start session
	session_start();
	
	//Include database connection details
	include("AppInfo.php");
	include('utils.php');
	require_once('PhpConsole.php');
PhpConsole::start(true, true, dirname(__FILE__));


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
	$dateFromCal = clean($_GET['date']);
	$dateFromCal = substr($dateFromCal, 0, strpos($dateFromCal, "GMT"));
	$dt = date('D M d Y', strtotime($dateFromCal));
	
		    $show_name = clean($_SESSION['show_name']);
			$query = mysql_query("SELECT * FROM shows WHERE show_name='$show_name' and call_date='$dt'");
			$imgoing = false;
				if($query) 
				{
					$first = true;
					// While there are results loop through them - fetching an Object (i like PHP5 btw!).
					while ($result = mysql_fetch_object($query)) {
					if($first)
					{
	?>
<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" lang="en">
  <head>
 
    <meta charset="utf-8" />
	</head>
	</body>
	 <div style="font-size: 20px;">
	<?php
	     echo 'Location: '.$result->city . ', ' . $result->state;  
	     $_SESSION['city'] = $result->city;
		 $_SESSION['calltime'] = $result->call_time;
	     $_SESSION['showdate'] = $result->call_date;
		 $_SESSION['state'] = $result->state;
	?>
	</div><br>
	<label style="font-size: 26px;"><b>Who's Going:</b></label>
	<div style="clear:both; font-weight: bold; text-align:center; width: 300px; margin-left: 120px;">
	
	<?php
		$first = false;
	}
		
					foreach($facebook as $value)
					{
						if(idx($value, 'username') == $result->user_id)
						{
					?>
 <script type="text/javascript">
 
        FB.init({
          appId      : '<?php echo AppInfo::appID(); ?>', // App ID
          channelUrl : '//<?php echo $_SERVER["HTTP_HOST"]; ?>/channel.html', // Channel File
          status     : true, // check login status
          cookie     : true, // enable cookies to allow the server to access the session
          xfbml      : true // parse XFBML
        });
   
  $(document).ready(function() {
    $('#sendMessage').click(function() {
        FB.ui({
            method: 'send',
			to: <?php echo idx($value, 'uid'); ?>,
			picture: "http://ridetoset.com/index_files/images/logo/style2/logo.png",
            name: 'Ride to Set',
            link: 'https://apps.facebook.com/ridetoset/',
        });
    });
});

function notGoing()
{
var xmlhttp;
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		$("#im_out").hide();
		$("#im_going").show();
		$("#goingtext").hide();
    }
}
	xmlhttp.open("GET","not-going.php",true);
	xmlhttp.send();
	
}


function imgoing()
{
var xmlhttp;
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		$("#im_out").show();
		$("#im_going").hide();
		$("#goingtext").show();
    }
}
	xmlhttp.open("GET","add-going.php",true);
	xmlhttp.send();
	
}
	
	</script>
					<?php
					
							echo '<div id="imagegoing"><p id="picture" style="background-image: url(https://graph.facebook.com/'. idx($value, 'uid') . '/picture?type=normal); width:64px; height:64px; margin-right: 20px; float:left; background-position: center 25%;background-repeat: no-repeat;background-size: 64px;"></p>';
							echo  '<h2 style="width: 300px;"><strong>'.idx($value, 'name').'</strong></h2>';
							echo  '<p>'.idx($value, 'user_location').'</p>';
							echo '<input type="button" id="sendMessage" value="Send Message" /></div></div>';
							break;
						}
						
						
						}
			
		
					
					    if($result->user_id == clean($_SESSION['user_id']))
						{
							echo '<div style="clear:both; font-family: "Helvetica Neue", Arial, sans-serif; font-size: 18px; font-weight: bold !important;" id="goingtext"><b>Your Going!<b></div>';
							$imgoing = true;
							
						}
				}
				
						if($imgoing == true)
						{
						?>
							<!--form id="im_out" method="post" style="margin-top: 20px;"-->
							<div id="im_out">
								<input type="button" id="imout" class="try sprited" value="I'm Out!" onclick="notGoing()">
							</div>
							<div style="clear:both;"></div>
							<!--form id="im_going" method="post" action="add-going.php" style="margin-top: 20px;"-->
							<div id="im_going" style="display:none;">
								<input type="button" id="imgoing" class="try sprited" value="I'm Going!" onclick="imgoing()">
							</div>
							<!--/form-->
							<?php
							
						}
						else
						{
						?>
						<div id="im_out" style="display:none;">
							<input type="button" id="imout" class="try sprited" value="I'm Out!" onclick="notGoing()">
						</div>
						<div style="clear:both;"></div>
							<!--form id="im_going" method="post" action="add-going.php" style="margin-top: 20px;"-->
							<div id="im_going">
								<input type="button" id="imgoing" class="try sprited" value="I'm Going!" onclick="imgoing()">
							</div>
							<!--/form-->
						<?php
						}
				
				
				
				}							
				else {
					echo 'ERROR: There was a problem with the query.';
				}
					
					
?>

</body>
</html>