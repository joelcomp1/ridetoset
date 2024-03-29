<?php

/**
 * This sample app is provided to kickstart your experience using Facebook's
 * resources for developers.  This sample app provides examples of several
 * key concepts, including authentication, the Graph API, and FQL (Facebook
 * Query Language). Please visit the docs at 'developers.facebook.com/docs'
 * to learn more about the resources available to you
 */
	//Start session
	session_start();
// Provides access to app specific values such as your app id and app secret.
// Defined in 'AppInfo.php'
require_once('AppInfo.php');


require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$scriptVersion = $detect->getScriptVersion();



if(empty($_SERVER['CONTENT_TYPE']))
{ 
  $_SERVER['CONTENT_TYPE'] = "application/x-www-form-urlencoded"; 
}

// This provides access to helper functions defined in 'utils.php'
require_once('utils.php');


/*****************************************************************************
 *
 * The content below provides examples of how to fetch Facebook data using the
 * Graph API and FQL.  It uses the helper functions defined in 'utils.php' to
 * do so.  You should change this section so that it prepares all of the
 * information that you want to display to the user.
 *
 ****************************************************************************/

require_once('sdk/src/facebook.php');


$facebook = new Facebook(array(
  'appId'  => AppInfo::appID(),
  'secret' => AppInfo::appSecret(),
  'sharedSession' => true,
  'trustForwarded' => true,
));
$appid = AppInfo::appID();
$user_id = $facebook->getUser();
if ($user_id) {
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
 
  
  

  // This fetches some things that you like . 'limit=*" only returns * values.
  // To see the format of the data you are retrieving, use the "Graph API
  // Explorer" which is at https://developers.facebook.com/tools/explorer/
  $likes = idx($facebook->api('/me/likes?limit=4'), 'data', array());

  // This fetches 4 of your friends.
  $friends = idx($facebook->api('/me/friends?limit=8'), 'data', array());
  $_SESSION['friends'] = idx($facebook->api('/me/friends'), 'data', array());
  // Here is an example of a FQL call that fetches all of your friends that are
  // using this app
  $app_using_friends = $facebook->api(array(
    'method' => 'fql.query',
    'query' => 'SELECT uid, name, username FROM user WHERE uid IN(SELECT uid2 FROM friend WHERE uid1 = me()) AND is_app_user = 1'
  ));
  $_SESSION['facebook'] = $app_using_friends;
  
  $_SESSION['user_id'] = $basic['username'];
  
  

}

// Fetch the basic info of the app that they are using
$app_info = $facebook->api('/'. AppInfo::appID());

$app_name = idx($app_info, 'name', '');

?>
<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=2.0, user-scalable=yes" />

    <title><?php echo he($app_name); ?></title>
    <link rel="stylesheet" href="stylesheets/screen.css" media="Screen" type="text/css" />
    <link rel="stylesheet" href="stylesheets/mobile.css" media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" type="text/css" />

    <!--[if IEMobile]>
    <link rel="stylesheet" href="mobile.css" media="screen" type="text/css"  />
    <![endif]-->

    <!-- These are Open Graph tags.  They add meta data to your  -->
    <!-- site that facebook uses when your content is shared     -->
    <!-- over facebook.  You should fill these tags in with      -->
    <!-- your data.  To learn more about Open Graph, visit       -->
    <!-- 'https://developers.facebook.com/docs/opengraph/'       -->
    <meta property="og:title" content="<?php echo he($app_name); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo AppInfo::getUrl(); ?>" />
    <meta property="og:image" content="<?php echo AppInfo::getUrl('/logo.png'); ?>" />
    <meta property="og:site_name" content="<?php echo he($app_name); ?>" />
    <meta property="og:description" content="My first app" />
    <meta property="fb:app_id" content="<?php echo AppInfo::appID(); ?>" />

<link href='stylesheets/fullcalendar.css' rel='stylesheet' />
  <link rel="stylesheet" href="javascript/jquery-ui.css" />
  <script src="javascript/jquery-1.9.1.js"></script>
  <script src="javascript/jquery-ui.js"></script>
<!--script src='javascript/jquery-1.9.1.min.js'></script>
<script src='javascript/jquery-ui-1.10.2.custom.min.js'></script-->
<script src='javascript/fullcalendar.min.js'></script>
<script src='javascript/gcal.js'></script>
<script src='javascript/jquery.lightbox_me.js'></script>
  <script type="text/javascript" src="javascript/jquery.timepicker.js"></script>
  <script src="//ads.lfstmedia.com/getad?site=197028" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="stylesheets/jquery.timepicker.css" />

    <script type="text/javascript">
	
	function mobile() {
var check = false;
(function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
return check; }
	
      function logResponse(response) {
       // if (console && console.log) {
          //console.log('The response was', response);
        //}
      }

      $(function(){
        // Set up so we handle click on the buttons
        $('#postToWall').click(function() {
          FB.ui(
            {
              method : 'feed',
              link   : $(this).attr('data-url')
            },
            function (response) {
              // If response is null the user canceled the dialog
              if (response != null) {
                logResponse(response);
              }
            }
          );
        });

        $('#sendToFriends').click(function() {
          FB.ui(
            {
              method : 'send',
              link   : $(this).attr('data-url')
            },
            function (response) {
              // If response is null the user canceled the dialog
              if (response != null) {
                logResponse(response);
              }
            }
          );
        });

        $('#sendRequest').click(function() {
          FB.ui(
            {
              method  : 'apprequests',
              message : $(this).attr('data-message')
            },
            function (response) {
              // If response is null the user canceled the dialog
              if (response != null) {
                logResponse(response);
              }
            }
          );
        });
      });
    </script>

    <!--[if IE]>
      <script type="text/javascript">
        var tags = ['header', 'section'];
        while(tags.length)
          document.createElement(tags.pop());
      </script>
    <![endif]-->
  </head>
  <body>
    <div id="fb-root"></div>
    <script type="text/javascript">
	var date;
	var show;

	
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '<?php echo AppInfo::appID(); ?>', // App ID
          channelUrl : 'https://<?php echo $_SERVER["HTTP_HOST"]; ?>/channel.html', // Channel File
          status     : true, // check login status
          cookie     : true, // enable cookies to allow the server to access the session
          xfbml      : true // parse XFBML
        });


        // Listen to the auth.login which will be called when the user logs in
        // using the Login button
        FB.Event.subscribe('auth.login', function(response) {
          // We want to reload the page now so PHP can read the cookie that the
          // Javascript SDK sat. But we don't want to use
          // window.location.reload() because if this is in a canvas there was a
          // post made to this page and a reload will trigger a message to the
          // user asking if they want to send data again.
			if (navigator.appName != 'Microsoft Internet Explorer')
			{
				//window.location = window.location;
			}
		});

		
        FB.Canvas.setAutoGrow();
      };

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=614281765271673";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
	  

		function lookup(inputString) {
		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$.post("search-shows.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					$('#suggestions').show();
					$('#autoSuggestionsList').html(data);
				}
			});
		}
	} // lookup
	
	function fillTags(thisValue) {
		$('#inputString').val(thisValue);
		document.getElementById('header_show_name').innerHTML = thisValue;
				 jQuery.ajax({
				url: 'session-start.php',
				type: 'POST',
				data: {
					txt: thisValue,
				},
				dataType : 'json',
				success: function(data, textStatus, xhr) {
					//console.log(data); // do with data e.g success message
				},
				error: function(xhr, textStatus, errorThrown) {
					//console.log(textStatus.reponseText);
				}
				
    });
		setTimeout("$('#suggestions').hide();", 200);
		$('#try-2').show();
		
	}  

	$(function() {
	
            function launch() {
                 $('#addshow').lightbox_me({centered: true, onLoad: function() { $('#addshow').find('input:first').focus()}});
				 $('#specificShow').lightbox_me({centered: true, onLoad: function() { $('#specificShow').find('input:first').focus()}});
            }
            
            $('#try-1').click(function(e) {
                $("#addshow").lightbox_me({centered: true, onLoad: function() {
					$("#addshow").find("input:first").focus();
				}});
					var input = document.getElementById("inputString");
					var elem = document.getElementById("showname");
					if(input.value != "Start Typing Shows here...")
					{
						elem.value = input.value;
					}
				
                e.preventDefault();
            });
            $('#try-2').click(function(e) {
                    $("#specificShow").lightbox_me({centered: true, onLoad: function() {
					$("#specificShow").find("input:first").focus();
					$('#daycalendar').fullCalendar('render');
					$('#calltimeinday').timepicker({'step':'5', 'minTime':'5:00am'});

					
				}});
				
                e.preventDefault();
            });
            
            $('table tr:nth-child(even)').addClass('stripe');
			
			$('#calltime').timepicker({'step':'5', 'minTime':'5:00am'});
			
			  $( "#showdate" ).datepicker({dateFormat: "D M d yy", minDate: 0});

        });
	
	  function formatAMPM(date) {
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var ampm = hours >= 12 ? 'pm' : 'am';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  minutes = minutes < 10 ? '0'+minutes : minutes;
  var strTime = hours + ':' + minutes + ' ' + ampm;
  return strTime;
}
	  
	  
	  
$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		var id = '#dialog';
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 	
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});		
	if(mobile())
	{
			$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'basicDay'
			},
				defaultView: 'basicDay',
				dayClick: function(date, allDay, jsEvent, view) {
			if (allDay || $(jsEvent.target).is('div.fc-day-number')) {
            // Clicked on the entire day
            $('#calendar')
                .fullCalendar('changeView', 'basicDay'/* or 'basicDay' */)
                .fullCalendar('gotoDate',
                    date.getFullYear(), date.getMonth(), date.getDate());
			$('#searchshows').show();
            }},
			viewDisplay: function(view) 
			{ 
				    /*show search box in day view*/
					$('#searchshows').show();
					date = view.start.toDateString(); /*day view so should just be the single date*/
					var elem = document.getElementById("showdate");
					elem.value = date;
			
			},
			events: "populate-calendar.php",
			dayClick:  function(date, allDay, jsEvent, view)
			{
				if(view.name == "basicDay")
				{
					$('#try-1').trigger('click');
				}
				  $('#calendar')
                .fullCalendar('changeView', 'basicDay'/* or 'basicDay' */)
                .fullCalendar('gotoDate',
                    date.getFullYear(), date.getMonth(), date.getDate());
				$('#searchshows').show();
			},
			  eventClick: function(calEvent, jsEvent, view) {
			  $('#daycalendar').show();
			  $('#add_time_to_show').show();	
			  $('#timewhosgoing').hide();
			  var s = new String (calEvent.start);
			  s = s.substring(0, s.indexOf('GMT'));
			$('#daycalendar').fullCalendar('gotoDate', calEvent.start);

					
				document.getElementById("header_show_name").innerHTML = calEvent.title;
				document.getElementById("hiddenname").innerHTML = calEvent.title;
				$("[name='hiddenname']").val(calEvent.title);
				document.getElementById("hiddendate").innerHTML = calEvent.start;
				$("[name='hiddendate']").val(calEvent.start);

				 jQuery.ajax({
				url: 'session-start.php',
				type: 'POST',
				data: {
					txt: calEvent.title,
				},
				dataType : 'json',
				success: function(data, textStatus, xhr) {
				//	console.log(data); // do with data e.g success message
				},
				error: function(xhr, textStatus, errorThrown) {
					//console.log(textStatus.reponseText);
				}
				
    });
				$(".ui-datepicker a").each(function(index, elem) {
						$(elem).attr("onclick", "$(this).closest(\".ui-datepicker\").fadeOut(\"fast\");");
					});
				$('#try-2').trigger('click');

			}
		});
	}
	else
	{
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
				defaultView: 'month',
				dayClick: function(date, allDay, jsEvent, view) {
			if (allDay || $(jsEvent.target).is('div.fc-day-number')) {
            // Clicked on the entire day
            $('#calendar')
                .fullCalendar('changeView', 'basicDay'/* or 'basicDay' */)
                .fullCalendar('gotoDate',
                    date.getFullYear(), date.getMonth(), date.getDate());
			$('#searchshows').show();
            }},
			viewDisplay: function(view) 
			{ 
				if(view.name == 'basicDay')
				{
				    /*show search box in day view*/
					$('#searchshows').show();
					date = view.start.toDateString(); /*day view so should just be the single date*/
					var elem = document.getElementById("showdate");
					elem.value = date;

				}
				else
				{
					/*hide search box in week or month view*/
					 //$('#searchshows').hide();
				}
			
			},
			events: "populate-calendar.php",
			dayClick:  function(date, allDay, jsEvent, view)
			{
				if(view.name == "basicDay")
				{
					$('#try-1').trigger('click');
				}
				  $('#calendar')
                .fullCalendar('changeView', 'basicDay'/* or 'basicDay' */)
                .fullCalendar('gotoDate',
                    date.getFullYear(), date.getMonth(), date.getDate());
				$('#searchshows').show();
			},
			  eventClick: function(calEvent, jsEvent, view) {
			  $('#daycalendar').show();
			  $('#add_time_to_show').show();	
			  $('#timewhosgoing').hide();
			  var s = new String (calEvent.start);
			  s = s.substring(0, s.indexOf('GMT'));
			$('#daycalendar').fullCalendar('gotoDate', calEvent.start);

					
				document.getElementById("header_show_name").innerHTML = calEvent.title;
				document.getElementById("hiddenname").innerHTML = calEvent.title;
				$("[name='hiddenname']").val(calEvent.title);
				document.getElementById("hiddendate").innerHTML = calEvent.start;
				$("[name='hiddendate']").val(calEvent.start);

				 jQuery.ajax({
				url: 'session-start.php',
				type: 'POST',
				data: {
					txt: calEvent.title,
				},
				dataType : 'json',
				success: function(data, textStatus, xhr) {
				//	console.log(data); // do with data e.g success message
				},
				error: function(xhr, textStatus, errorThrown) {
					//console.log(textStatus.reponseText);
				}
				
    });
				$(".ui-datepicker a").each(function(index, elem) {
						$(elem).attr("onclick", "$(this).closest(\".ui-datepicker\").fadeOut(\"fast\");");
					});
				$('#try-2').trigger('click');

			}
		});
	}
		
		
		$('#daycalendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'agendaDay'
			},
			defaultView: "agendaDay",
			 eventSources: [

        // your event source
        {
            url: '/populate-calendar-day.php', // use the `url` property
        }    

		],
		viewDisplay: function (element) {
		document.getElementById("hiddendate").innerHTML = element.start;
				$("[name='hiddendate']").val(element.start);
		},
			//events: "populate-calendar-day.php",
			eventClick: function(calEvent, jsEvent, view) {
				 $('#daycalendar').hide();
				 var s = new String (calEvent.start);
				s = s.substring(0, s.indexOf('GMT'));
				
				var d = new Date(s);
				var hour = d.getMonth();
				document.getElementById("header_show_time").innerHTML = formatAMPM(d);
				//s = s.substring(0, s.indexOf(d.getHours()));
				var split = s.split(" ");
				var newString = split[0] + " " + split[1] + " " + split[2] + " " + split[3];
				if(d.getHours() < 10)
				{
					//s = s.substring(0, s.indexOf(" 0"));
				}
				document.getElementById("header_show_time").innerHTML = newString;
				document.getElementById("header_show_time").innerHTML += ", Call Time: ";
				document.getElementById("header_show_time").innerHTML += formatAMPM(d);
					$('#timewhosgoing').show();	
					$('#add_time_to_show').hide();	
					$('#daycalendar').fullCalendar('gotoDate', calEvent.start);
		
				$.get('whos-going.php', { date: calEvent.start}, function (data) {  
            $('#pageContent').html(data);
        });

			}
		});
			   
	  
	});
	function getDate()
	{
		return date;
	}

    </script>
	<?php
	if($deviceType == 'computer')
	{
	?>
<style>
	#calendar {
		width: 720px;
		margin: 0 auto;
		}
	#daycalendar {
		width: 500px;
		margin: 20px auto;
		}
</style>	
	<?php
	}
	else
	{
	?>
<style>
	#calendar {
		width: 500px;
		margin: 0 auto;
		}
	#daycalendar {
		width: 500px;
		margin: 20px auto;
		}
</style>
	<?php
	}
	?>
<style>

	#calendar {
		width: 720px;
		margin: 0 auto;
		}
	#daycalendar {
		width: 500px;
		margin: 20px auto;
		}
.fc-view-month .fc-event-time{
   display : none;
}

.fc-view-basicWeek .fc-event-time{
   display : none;
}

.fc-view-basicDay .fc-event-time{
   display : none;
}

#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:300px;
  height:275px;
  display:none;
  z-index:9999;
  padding:20px;
}
#boxes #dialog {

  padding:10px;
  text-align:center;
  background-color:#ffffff;
}

</style>
    <header class="clearfix">
	
    <section id="get-started">
      <!--p>Welcome to your Facebook app, running on <span>heroku</span>!</p>
      <a href="https://devcenter.heroku.com/articles/facebook" target="_top" class="button">Learn How to Edit This App</a>
	  <p style="background-image: url(images/header.png);"></p-->
    </section>
      <?php if (isset($basic)) { ?>
	  
      <p id="picture" style="background-image: url(https://graph.facebook.com/<?php echo he($user_id); ?>/picture?type=normal)"></p>

      <div>
        <h1 style="height: 32px;">Welcome, <strong><?php echo he(idx($basic, 'name')); ?></strong>
			  <div class="module-inner2" style="float:right;">
	  <a href="https://www.facebook.com/ridetoset" target=_blank >
			<img border="0" src="images/facebook.png" alt="RideToSet on Facebook" width="32" height="32" style="margin-left: 30px;"></a>
		<a href="https://twitter.com/RideToSet" target=_blank >
<img border="0" src="images/twitter.png" alt="RideToSet on Twitter" width="32" height="32" style="margin-left: 20px;"></a><p></p></div>
<br>
      </div>
      <?php } else { ?>
      <div  style="text-align: center;">
        <h1>Connect with Background Actors</h1>
        <div class="fb-login-button" data-show-faces="true" data-width="200" data-max-rows="5"  data-size="large" data-scope="user_likes,user_photos"></div>
      </div>
      <?php } ?>
	  <div style="text-align:center;">
		<?php
		if($deviceType == 'computer')
		{
		?>
	  <script type="text/javascript">
    //<![CDATA[
        LSM_Slot({
            adkey: '1a1',
            ad_size: '728x90',
            slot: 'slot76860'
        });
		 //]]>
		</script>
		<?php 
		}
		else
		{
		?>
 
<script type="text/javascript">
    //<![CDATA[
        LSM_Slot({
            adkey: '24f',
            ad_size: '320x50',
            slot: 'slot91100'
        });
    //]]>
</script>
		<?php 
		}
		?>
</div>
    </header>
    <?php
      if ($user_id) {
    ?>
	<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<div id="errors" style="text-align:center; color:red;">';
		echo '<h1>Add Show Failed due to:</h1>';
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		echo '</div><br>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
<?php
if($deviceType == 'computer')
{
?>
<div style="text-align:center; clear:both; height:150px;" >

<a href="http://forum.ridetoset.com" target="_blank" style="float:left;"><img src="images/forum_banner.png" height=150px width=300px ></a>
<a href="http://ridetoset.com/video.html" target="_blank" style="float:right;"><img src="images/tutvideobanner.png" height=150px width=300px></a>

</div>

<div style="text-align:center; clear:both;margin-top:25px;">
		<input type="button" id="try-1" class="try sprited" value="Add Show!">
	</div>
	<div id="searchshows" style="text-align:center;clear:both;">
<input name="inputString" type="text" size="30" id="inputString" autocomplete="off" onkeyup="lookup(this.value);" onblur="fillTags(this.value);" 
value="Start Typing Shows here..." onfocus="this.value = this.value=='Start Typing Shows here...' ? '' : this.value; this.style.color='#000';" />
<div class="suggestionsBox" id="suggestions" style="display: none; text: font:bold 0.4em 'TeXGyreAdventor', Arial, sans-serif!important;">
	<img src="images/upArrow.png" style="position: relative; top: -12px; left: 0px;" alt="upArrow" />
<div class="suggestionList" id="autoSuggestionsList">
		&nbsp;
	</div>
	</div>
	<input type="button" id="try-2" class="try sprited" value="Go" onclick="$('#daycalendar').fullCalendar('refetchEvents');" style="">

	

	<!--a href="#" id="try-2" class="try sprited"><img src="../images/help.png" style="padding: 0px 0px 0px 20px;"></a-->

</div>
<?php 
}
else
{
?>
<div id="searchshows" style="text-align:center;clear:both;width:500px">
<input name="inputString" type="text" size="30" id="inputString" autocomplete="off" onkeyup="lookup(this.value);" onblur="fillTags(this.value);" 
value="Start Typing Shows here..." onfocus="this.value = this.value=='Start Typing Shows here...' ? '' : this.value; this.style.color='#000';" />
<div class="suggestionsBox" id="suggestions" style="display: none; text: font:bold 0.4em 'TeXGyreAdventor', Arial, sans-serif!important;">
	<img src="images/upArrow.png" style="position: relative; top: -12px; left: 0px;" alt="upArrow" />
<div class="suggestionList" id="autoSuggestionsList">
		&nbsp;
	</div>
	</div>
	<input type="button" id="try-2" class="try sprited" value="Go" onclick="$('#daycalendar').fullCalendar('refetchEvents');" style="">

	

	<!--a href="#" id="try-2" class="try sprited"><img src="../images/help.png" style="padding: 0px 0px 0px 20px;"></a-->

</div>
<div style="text-align:center;clear:both;width:500px;   margin: 0 auto;
    display: block;">
<a href="http://forum.ridetoset.com" target="_blank"  style="float: left;padding-top: 25px;margin-left: 10%;"><img src="images/forum_banner_mobile.png" width=200 height=60 ></a>
<input type="button" id="try-1" class="try sprited" value="Add Show!" style="width:200px; height: 60px; float: left;margin-top: 25px;">
<a href="http://ridetoset.com/video.html" target="_blank"  style="float: left;padding-top: 25px;"><img src="images/tutvideobannermobile.png" width=200 height=60></a>
</div>




<?php 
}
?>
	
<div id="boxes">
<div style="top: 199.5px; left: 551.5px; display: none;clear:both;" id="dialog" class="window">
<script type="text/javascript">
    //<![CDATA[
        LSM_Slot({
            adkey: 'ca6',
            ad_size: '300x250',
            slot: 'slot76634'
        });
    //]]>
</script>
<br>
<a href="#" class="close" id="close" style="text-align:center;">Close</a>

</div>
<!-- Mask to cover the whole screen -->
<div style="width: 1478px; height: 1487px; display: none; opacity: 0.8;" id="mask"></div>
</div>
	<br>
    <div id='calendar'></div>

			<div id="specificShow" style="display: none; left: 50%; margin-left: -223px; z-index: 1002; position: fixed; top: 50%; margin-top: -159px; background-color:white; text-align:center;">
                <h1 id="header_show_name" style="font-size: 35px;"></h1><br>
					<form id="add_time_to_show" method="post" action="add-time.php">
    				<label><strong>Call Time:</strong> <input id="calltimeinday" class="time sprited"  name="calltimeinday" type="text"></label>
                    <label><strong>City:</strong> <input class="sprited" id="city" name="city" >
					<input type="hidden" id="hiddendate" name="hiddendate">
					<input type="hidden" id="hiddenname" name="hiddenname">
					<strong>State:</strong> <select id="state" name="state"> 
<option value="" >Select a State</option> 
<option value="AL">Alabama</option> 
<option value="AK">Alaska</option> 
<option value="AZ">Arizona</option> 
<option value="AR">Arkansas</option> 
<option value="CA" selected="selected">California</option> 
<option value="CO">Colorado</option> 
<option value="CT">Connecticut</option> 
<option value="DE">Delaware</option> 
<option value="DC">District Of Columbia</option> 
<option value="FL">Florida</option> 
<option value="GA">Georgia</option> 
<option value="HI">Hawaii</option> 
<option value="ID">Idaho</option> 
<option value="IL">Illinois</option> 
<option value="IN">Indiana</option> 
<option value="IA">Iowa</option> 
<option value="KS">Kansas</option> 
<option value="KY">Kentucky</option> 
<option value="LA">Louisiana</option> 
<option value="ME">Maine</option> 
<option value="MD">Maryland</option> 
<option value="MA">Massachusetts</option> 
<option value="MI">Michigan</option> 
<option value="MN">Minnesota</option> 
<option value="MS">Mississippi</option> 
<option value="MO">Missouri</option> 
<option value="MT">Montana</option> 
<option value="NE">Nebraska</option> 
<option value="NV">Nevada</option> 
<option value="NH">New Hampshire</option> 
<option value="NJ">New Jersey</option> 
<option value="NM">New Mexico</option> 
<option value="NY">New York</option> 
<option value="NC">North Carolina</option> 
<option value="ND">North Dakota</option> 
<option value="OH">Ohio</option> 
<option value="OK">Oklahoma</option> 
<option value="OR">Oregon</option> 
<option value="PA">Pennsylvania</option> 
<option value="RI">Rhode Island</option> 
<option value="SC">South Carolina</option> 
<option value="SD">South Dakota</option> 
<option value="TN">Tennessee</option> 
<option value="TX">Texas</option> 
<option value="UT">Utah</option> 
<option value="VT">Vermont</option> 
<option value="VA">Virginia</option> 
<option value="WA">Washington</option> 
<option value="WV">West Virginia</option> 
<option value="WI">Wisconsin</option> 
<option value="WY">Wyoming</option>
</select></label>
					<div id="actions">
						<input type="submit" id="try-2" class="try sprited" value="Add">
                    </div>
					</form>
                 <div id='daycalendar'></div>
	
					<div id='timewhosgoing' style="display:none;">
					
						<h2 id="header_show_time" style="font-weight: bold;"></h2><br>
						
						<div id="pageContent"></div>
						
					</div>
				 <a id="close_x" class="close sprited" href="#" style="background:url('images/close-x.png');  background-size:24px 23px;">close</a>
                </div>
	
	
			<div id="addshow" style="display: none; left: 50%; margin-left: -223px; z-index: 1002; position: fixed; top: 50%; margin-top: -159px; text-align:center;">
                <h1>Let's add a new Show!</h1>
                <form id="sign_up_form" method="post" action="add-show.php">
                    <label><strong>Show Name:</strong> <input class="sprited" id="showname" name="showname" ></label>
					<label><strong>City:</strong> <input class="sprited" id="city" name="city" >
					<strong>State:</strong> <select id="state" name="state"> 
<option value="" >Select a State</option> 
<option value="AL">Alabama</option> 
<option value="AK">Alaska</option> 
<option value="AZ">Arizona</option> 
<option value="AR">Arkansas</option> 
<option value="CA" selected="selected">California</option> 
<option value="CO">Colorado</option> 
<option value="CT">Connecticut</option> 
<option value="DE">Delaware</option> 
<option value="DC">District Of Columbia</option> 
<option value="FL">Florida</option> 
<option value="GA">Georgia</option> 
<option value="HI">Hawaii</option> 
<option value="ID">Idaho</option> 
<option value="IL">Illinois</option> 
<option value="IN">Indiana</option> 
<option value="IA">Iowa</option> 
<option value="KS">Kansas</option> 
<option value="KY">Kentucky</option> 
<option value="LA">Louisiana</option> 
<option value="ME">Maine</option> 
<option value="MD">Maryland</option> 
<option value="MA">Massachusetts</option> 
<option value="MI">Michigan</option> 
<option value="MN">Minnesota</option> 
<option value="MS">Mississippi</option> 
<option value="MO">Missouri</option> 
<option value="MT">Montana</option> 
<option value="NE">Nebraska</option> 
<option value="NV">Nevada</option> 
<option value="NH">New Hampshire</option> 
<option value="NJ">New Jersey</option> 
<option value="NM">New Mexico</option> 
<option value="NY">New York</option> 
<option value="NC">North Carolina</option> 
<option value="ND">North Dakota</option> 
<option value="OH">Ohio</option> 
<option value="OK">Oklahoma</option> 
<option value="OR">Oregon</option> 
<option value="PA">Pennsylvania</option> 
<option value="RI">Rhode Island</option> 
<option value="SC">South Carolina</option> 
<option value="SD">South Dakota</option> 
<option value="TN">Tennessee</option> 
<option value="TX">Texas</option> 
<option value="UT">Utah</option> 
<option value="VT">Vermont</option> 
<option value="VA">Virginia</option> 
<option value="WA">Washington</option> 
<option value="WV">West Virginia</option> 
<option value="WI">Wisconsin</option> 
<option value="WY">Wyoming</option>
</select></label>

                    <label><strong>Date:</strong> <input class="sprited" type="text" id="showdate" name="showdate"></label>
					<label><strong>Call Time:</strong> <input id="calltime" class="time sprited"  name="calltime" type="text"></label>
                    <div id="actions">
                  
						<input type="submit" id="try-2" class="try sprited" value="Go">
                    </div>

					</form>
               
				 <a id="close_x" class="close sprited" href="#" style="background:url('images/close-x.png');  background-size:24px 23px;">close</a>
            </div>
			<!--div id="moreinfo" style="display: none; left: 50%; margin-left: -223px; z-index: 1002; position: fixed; top: 50%; margin-top: -159px; text-align:center;">
				Don't see your show? Click the "Add Show!" button to add your show and call time for that day.
				<a id="close_x" class="close sprited" href="#">close</a>
			</div-->	
<br><br>
<!--script type="text/javascript">
    //<![CDATA[
        LSM_Slot({
            adkey: '272',
            ad_size: '728x90',
            slot: 'slot77011'
        });
    //]]>
</script-->
      <div class="list" style="text-align:center; margin-top: 20px;">
        <h1 style="float:left; position:relative; left: 40%;">Friends using this app</h1>
       <div id="share-app">
          <!--p>Share your app:</p-->
          <ul>
            <!--li>
              <a href="#" class="facebook-button" id="postToWall" data-url="<?php echo AppInfo::getUrl(); ?>">
                <span class="plus">Post to Wall</span>
              </a>
            </li>
            <li>
              <a href="#" class="facebook-button speech-bubble" id="sendToFriends" data-url="<?php echo AppInfo::getUrl(); ?>">
                <span class="speech-bubble">Send Message</span>
              </a>
            </li-->
            <li>
					<input type="button" id="sendRequest" class="apprequests try sprited" value="Invite Friends!" data-message="Check out Ride To Set! Bringing background actors together.">

              <!--sa href="#" class="apprequests" id="sendRequest" data-message="Check out Ride To Set! Bringing background actors together.">
                <pan class="apprequests">Invite Friends!</span>
              </a-->
            </li>
          </ul>
        </div>
		<br><br><br><br>
        <ul class="friends">
          <?php
            foreach ($app_using_friends as $auf) {
              // Extract the pieces of info we need from the requests above
              $id = idx($auf, 'uid');
              $name = idx($auf, 'name');
          ?>
          <li style="float:left; margin-left:10px;">
            <a href="https://www.facebook.com/<?php echo he($id); ?>" target="_top">
              <img src="https://graph.facebook.com/<?php echo he($id) ?>/picture?type=square" alt="<?php echo he($name); ?>"><br><br>
              <?php echo he($name); ?>
            </a>
          </li>
          <?php
            }
          ?>
        </ul>
      </div>

<script type="text/javascript">
    //<![CDATA[
        LSM_Slot({
            adkey: '316',
            ad_size: '720x300',
            slot: 'slot77006'
        });
    //]]>
</script>
	
    <?php
      }
    ?>
<!--a href="http://www.softicons.com/free-icons/toolbar-icons/childish-icons-by-double-j-design/help-icon">Icons thanks to Double-J Design</a-->
  </body>
</html>
