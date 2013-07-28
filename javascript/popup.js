/***************************/
//@Author: Adrian "yEnS" Mato Gondelle
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

//SETTING UP OUR POPUP
//0 means disabled; 1 means enabled;
var popupStatus = 0;
var popupStatus2 = 0;
var popupStatus3 = 0;
var popupStatus4 = 0;
var popupStatus5 = 0;
var popupStatus6 = 0;
var popupStatus7 = 0;
var popupStatus8 = 0;
var popupStatus9 = 0;
var popupStatus10 = 0;
var popupStatus11 = 0;
var popupStatus12 = 0;
//loading popup with jQuery magic!
function loadPopup(popUpSelect){
	//loads popup only if it is disabled
	if(popupStatus==0){
		if(popUpSelect == "#newVol")
		{
			$("#backgroundPopupVol").css({
			"opacity": "0.7"
			});
			$("#backgroundPopupVol").fadeIn("slow");
		
			$("#popupContactVol").fadeIn("slow");
			
	
		}
		else if(popUpSelect == "#newOrg")
		{
			$("#backgroundPopupOrg").css({
			"opacity": "0.7"
			});
			$("#backgroundPopupOrg").fadeIn("slow");
		
		    $("#popupContactOrg").fadeIn("slow");
		}
		popupStatus = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup(popUpSelect){
	//disables popup only if it is enabled
	if(popupStatus==1){
	
		if(popUpSelect == "#newVol")
		{
			$("#backgroundPopupVol").fadeOut("slow");
			$("#popupContactVol").fadeOut("slow");
			$('#video').show();
		}
		else if(popUpSelect == "#newOrg")
		{
			$("#backgroundPopupOrg").fadeOut("slow");
			$("#popupContactOrg").fadeOut("slow");
			$('#video').show();
		}
		
		popupStatus = 0;
	}
}

//centering popup
function centerPopup(popUpSelect){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	if(popUpSelect == "#newVol")
	{
			var popupHeight = $("#popupContactVol").height();
			var popupWidth = $("#popupContactVol").width();
			
			//centering
			$("#popupContactVol").css({
				"position": "absolute",
				"top": windowHeight/2-popupHeight,
				"left": windowWidth/2-popupWidth/1.2
			});
			//only need force for IE6
	
			$("#backgroundPopup").css({
				"height": windowHeight
			});
	}
	else if(popUpSelect == "#newOrg")
	{
			var popupHeight = $("#popupContactOrg").height();
			var popupWidth = $("#popupContactOrg").width();
			
			//centering
			$("#popupContactOrg").css({
				"position": "absolute",
				"top": windowHeight/2-popupHeight,
				"left": windowWidth/2-popupWidth/1.2
			});
			//only need force for IE6
	
			$("#backgroundPopup").css({
				"height": windowHeight
			})
	}

	
}


//Controlles the pop up for existing users

//loading popup with jQuery magic!
function loadPopup2(){
	//loads popup only if it is disabled
	if(popupStatus2==0){
		$("#backgroundPopup2").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup2").fadeIn("slow");
		$("#popupContact2").fadeIn("slow");
		popupStatus2 = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup2(){
	//disables popup only if it is enabled
	if(popupStatus2==1){
		$("#backgroundPopup2").fadeOut("slow");
		$("#popupContact2").fadeOut("slow");
		popupStatus2 = 0;
	}
}

//centering popup
function centerPopup2(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#popupContact2").height();
	var popupWidth = $("#popupContact2").width();
	//centering
	$("#popupContact2").css({
		"position": "absolute",
		"top": windowHeight/2-popupHeight/2,
		"left": windowWidth/2-popupWidth/2
	});
	//only need force for IE6
	
	$("#backgroundPopup2").css({
		"height": windowHeight
	});
	
}




//Controlles the pop up for existing users

//loading popup with jQuery magic!
function loadPopup3(){
	//loads popup only if it is disabled
	if(popupStatus3==0){
		$("#backgroundPopup3").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup3").fadeIn("slow");
		$("#popupContact3").fadeIn("slow");
		popupStatus3 = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup3(){
	//disables popup only if it is enabled
	if(popupStatus3==1){
		$("#backgroundPopup3").fadeOut("slow");
		$("#popupContact3").fadeOut("slow");
		popupStatus3 = 0;
	}
}

//centering popup
function centerPopup3(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#popupContact3").height();
	var popupWidth = $("#popupContact3").width();
	//centering
	$("#popupContact3").css({
		"position": "absolute",
		"top": windowHeight/2-popupHeight/2,
		"left": windowWidth/2-popupWidth/2
	});
	//only need force for IE6
	
	$("#backgroundPopup3").css({
		"height": windowHeight
	});
	
}



//loading popup with jQuery magic!
function loadPopup4(){
	//loads popup only if it is disabled
	if(popupStatus4==0){
		$("#backgroundPopup4").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup4").fadeIn("slow");
		$("#popupContact4").fadeIn("slow");
		popupStatus4 = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup4(){
	//disables popup only if it is enabled
	if(popupStatus4==1){
		$("#backgroundPopup4").fadeOut("slow");
		$("#popupContact4").fadeOut("slow");
		popupStatus4 = 0;
	}
}

//centering popup
function centerPopup4(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#popupContact4").height();
	var popupWidth = $("#popupContact4").width();
	//centering
	$("#popupContact4").css({
		"position": "absolute",
		"top": 1000,
		"left": windowWidth/2-popupWidth/2
	});
	//only need force for IE6
	
	$("#backgroundPopup4").css({
		"height": windowHeight
	});
	
}


//loading popup with jQuery magic!
function loadPopup5(){
	//loads popup only if it is disabled
	if(popupStatus5==0){
		$("#backgroundPopup5").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup5").fadeIn("slow");
		$("#popupContact5").fadeIn("slow");
		popupStatus5 = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup5(){
	//disables popup only if it is enabled
	if(popupStatus5==1){
		$("#backgroundPopup5").fadeOut("slow");
		$("#popupContact5").fadeOut("slow");
		popupStatus5 = 0;
	}
}

//centering popup
function centerPopup5(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#popupContact5").height();
	var popupWidth = $("#popupContact5").width();
	//centering
	$("#popupContact5").css({
		"position": "absolute",
		"top": 1100,
		"left": windowWidth/2-popupWidth/2
	});
	//only need force for IE6
	
	$("#backgroundPopup5").css({
		"height": windowHeight
	});
	
}




//loading popup with jQuery magic!
function loadPopup6(){
	//loads popup only if it is disabled
	if(popupStatus6==0){
		$("#backgroundPopup6").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup6").fadeIn("slow");
		$("#popupContact6").fadeIn("slow");
		popupStatus6 = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup6(){
	//disables popup only if it is enabled
	if(popupStatus6==1){
		$("#backgroundPopup6").fadeOut("slow");
		$("#popupContact6").fadeOut("slow");
		popupStatus6 = 0;
	}
}

//centering popup
function centerPopup6(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#popupContact6").height();
	var popupWidth = $("#popupContact6").width();
	//centering
	$("#popupContact6").css({
		"position": "absolute",
		"top": 1100,
		"left": windowWidth/2-popupWidth/2
	});
	//only need force for IE6
	
	$("#backgroundPopup6").css({
		"height": windowHeight
	});
	
}



//loading popup with jQuery magic!
function loadPopup7(){
	//loads popup only if it is disabled
	if(popupStatus7==0){
		$("#backgroundPopup7").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup7").fadeIn("slow");
		$("#popupContact7").fadeIn("slow");
		popupStatus7 = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup7(){
	//disables popup only if it is enabled
	if(popupStatus7==1){
		$("#backgroundPopup7").fadeOut("slow");
		$("#popupContact7").fadeOut("slow");
		popupStatus7 = 0;
	}
}

//centering popup
function centerPopup7(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#popupContact7").height();
	var popupWidth = $("#popupContact7").width();
	//centering
	$("#popupContact7").css({
		"position": "absolute",
		"top": windowHeight/2-popupHeight/2,
		"left": windowWidth/2-popupWidth/2
	});
	//only need force for IE6
	
	$("#backgroundPopup7").css({
		"height": windowHeight
	});
	
}




//loading popup with jQuery magic!
function loadPopup8(){
	//loads popup only if it is disabled
	if(popupStatus8==0){
		$("#backgroundPopup8").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup8").fadeIn("slow");
		$("#popupContact8").fadeIn("slow");
		popupStatus8 = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup8(){
	//disables popup only if it is enabled
	if(popupStatus8==1){
		$("#backgroundPopup8").fadeOut("slow");
		$("#popupContact8").fadeOut("slow");
		popupStatus8 = 0;
	}
}

//centering popup
function centerPopup8(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#popupContact8").height();
	var popupWidth = $("#popupContact8").width();
	//centering
	$("#popupContact8").css({
		"position": "absolute",
		"top": windowHeight/2-popupHeight/2,
		"left": windowWidth/2-popupWidth/2
	});
	//only need force for IE6
	
	$("#backgroundPopup8").css({
		"height": windowHeight
	});
	
}



//loading popup with jQuery magic!
function loadPopup9(){
	//loads popup only if it is disabled
	if(popupStatus9==0){
		$("#backgroundPopup9").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup9").fadeIn("slow");
		$("#popupContact9").fadeIn("slow");
		popupStatus9 = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup9(){
	//disables popup only if it is enabled
	if(popupStatus9==1){
		$("#backgroundPopup9").fadeOut("slow");
		$("#popupContact9").fadeOut("slow");
		popupStatus9 = 0;
	}
}

//centering popup
function centerPopup9(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#popupContact9").height();
	var popupWidth = $("#popupContact9").width();
	//centering
	$("#popupContact9").css({
		"position": "absolute",
		"top": windowHeight/2-popupHeight/2,
		"left": windowWidth/2-popupWidth/2
	});
	//only need force for IE6
	
	$("#backgroundPopup9").css({
		"height": windowHeight
	});
	
}




//loading popup with jQuery magic!
function loadPopup10(){
	//loads popup only if it is disabled
	if(popupStatus10==0){
		$("#backgroundPopup10").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup10").fadeIn("slow");
		$("#popupContact10").fadeIn("slow");
		popupStatus10 = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup10(){
	//disables popup only if it is enabled
	if(popupStatus10==1){
		$("#backgroundPopup10").fadeOut("slow");
		$("#popupContact10").fadeOut("slow");
		popupStatus10 = 0;
	}
}

//centering popup
function centerPopup10(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#popupContact10").height();
	var popupWidth = $("#popupContact10").width();
	//centering
	$("#popupContact10").css({
		"position": "absolute",
		"top": windowHeight/2-popupHeight/2,
		"left": windowWidth/2-popupWidth/2
	});
	//only need force for IE6
	
	$("#backgroundPopup10").css({
		"height": windowHeight
	});
	
}



//loading popup with jQuery magic!
function loadPopup11(){
	//loads popup only if it is disabled
	if(popupStatus11==0){
		$("#backgroundPopup11").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup11").fadeIn("slow");
		$("#popupContact11").fadeIn("slow");
		popupStatus11 = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup11(){
	//disables popup only if it is enabled
	if(popupStatus11==1){
		$("#backgroundPopup11").fadeOut("slow");
		$("#popupContact11").fadeOut("slow");
		popupStatus11 = 0;
	}
}

//centering popup
function centerPopup11(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#popupContact11").height();
	var popupWidth = $("#popupContact11").width();
	//centering
	$("#popupContact11").css({
		"position": "absolute",
		"top": windowHeight/2-popupHeight/2,
		"left": windowWidth/2-popupWidth/2
	});
	//only need force for IE6
	
	$("#backgroundPopup11").css({
		"height": windowHeight
	});
	
}




//loading popup with jQuery magic!
function loadPopup12(){
	//loads popup only if it is disabled
	if(popupStatus12==0){
		$("#backgroundPopup12").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup12").fadeIn("slow");
		$("#popupContact12").fadeIn("slow");
		popupStatus12 = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup12(){
	//disables popup only if it is enabled
	if(popupStatus12==1){
		$("#backgroundPopup12").fadeOut("slow");
		$("#popupContact12").fadeOut("slow");
		popupStatus12 = 0;
	}
}

//centering popup
function centerPopup12(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#popupContact12").height();
	var popupWidth = $("#popupContact12").height();
	//centering
	$("#popupContact12").css({
		"position": "absolute",
		"bottom": windowHeight/2-popupHeight*2,
		"right": windowWidth/2-popupWidth * 2
	});
	//only need force for IE6
	
	$("#backgroundPopup12").css({
		"height": windowHeight
	});
	
}



//CONTROLLING EVENTS IN jQuery
$(document).ready(function(){
	
	//This is used to "show" the advanced event options
  $(".flip").click(function(){
    $(".panel").slideDown("slow");
  });
  
  	//This is used to "show" the guide on home page
    $(".flip2").click(function(){
    $(".panel").slideDown("slow");
  });
	
		//LOADING POPUP
	//This is used for the login (and some images) popup
	$("#addshow").click(function(){
		//centering with css
		centerPopup2();
		//load popup
		loadPopup2();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose2").click(function(){
		disablePopup2();
	});
	//Click out event!
	$("#backgroundPopup2").click(function(){
		disablePopup2();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus2==1){
			disablePopup2();
		}
	});
	
	//This is used for the organization logo
	$("#orgLogo").click(function(){
		//centering with css
		centerPopup3();
		//load popup
		loadPopup3();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose3").click(function(){
		disablePopup3();
	});
	//Click out event!
	$("#backgroundPopup3").click(function(){
		disablePopup3();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus3==1){
			disablePopup3();
		}
	});
	
	
	//This is used for the help popup (event coordnators)
	$("#helpEventCoords").click(function(){
		//centering with css
		centerPopup4();
		//load popup
		loadPopup4();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose4").click(function(){
		disablePopup4();
	});
	//Click out event!
	$("#backgroundPopup4").click(function(){
		disablePopup4();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus4==1){
			disablePopup4();
		}
	});
	
	//This is used for the help popup (event colaborative)
	$("#helpCoolab").click(function(){
		//centering with css
		centerPopup5();
		//load popup
		loadPopup5();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose5").click(function(){
		disablePopup5();
	});
	//Click out event!
	$("#backgroundPopup5").click(function(){
		disablePopup5();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus5==1){
			disablePopup5();
		}
	});
	
	//This is used for the help popup (event Parent/Child)
	$("#helpCollaborative").click(function(){
		//centering with css
		centerPopup6();
		//load popup
		loadPopup6();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose6").click(function(){
		disablePopup6();
	});
	//Click out event!
	$("#backgroundPopup6").click(function(){
		disablePopup6();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus6==1){
			disablePopup6();
		}
	});
	
	//This is used for the help popup (event coordnators)
	$("#emailAccountSettings").click(function(){
		//centering with css
		centerPopup7();
		//load popup
		loadPopup7();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose7").click(function(){
		disablePopup7();
	});
	//Click out event!
	$("#backgroundPopup7").click(function(){
		disablePopup7();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus7==1){
			disablePopup7();
		}
	});
	
	//This is used for the help popup (event coordnators)
	$("#phoneAccountSettings").click(function(){
		//centering with css
		centerPopup8();
		//load popup
		loadPopup8();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose8").click(function(){
		disablePopup8();
	});
	//Click out event!
	$("#backgroundPopup8").click(function(){
		disablePopup8();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus8==1){
			disablePopup8();
		}
	});
	
	
		//This is used for the help popup (event coordnators)
	$("#searchtips").click(function(){
		//centering with css
		centerPopup9();
		//load popup
		loadPopup9();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose9").click(function(){
		disablePopup9();
	});
	//Click out event!
	$("#backgroundPopup9").click(function(){
		disablePopup9();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus9==1){
			disablePopup9();
		}
	});
	
	
		//This is used for the help popup (event coordnators)
	$("#planPricingHelp").click(function(){
		//centering with css
		centerPopup10();
		//load popup
		loadPopup10();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose10").click(function(){
		disablePopup10();
	});
	//Click out event!
	$("#backgroundPopup10").click(function(){
		disablePopup10();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus10==1){
			disablePopup10();
		}
	});
	
	
		//This is used for the help popup (event coordnators)
	$("#searchtips").click(function(){
		//centering with css
		centerPopup11();
		//load popup
		loadPopup11();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose11").click(function(){
		disablePopup11();
	});
	//Click out event!
	$("#backgroundPopup11").click(function(){
		disablePopup11();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus11==1){
			disablePopup11();
		}
	});
	
	
		//This is used for the help popup (event coordnators)
	$("#searchResults").click(function(){
		//centering with css
		centerPopup12();
		//load popup
		loadPopup12();
	
		
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose12").click(function(){
		disablePopup12();
	});
	//Click out event!
	$("#backgroundPopup12").click(function(){
		disablePopup12();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus12==1){
			disablePopup12();
		}
	});
	
	
	//LOADING POPUP for Volunteer Registration
	//Click the button event!
	$("#newVol").click(function(){
		//centering with css
		centerPopup('#newVol');
		//load popup
		loadPopup('#newVol');
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactCloseVol").click(function(){
		disablePopup('#newVol');
	});
	//Click out event!
	$("#backgroundPopupVol").click(function(){
		disablePopup('#newVol');
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus==1){
			disablePopup('#newVol');
		}
	});
	
	//LOADING POPUP for Organization Registration
	//Click the button event!
	$("#newOrg").click(function(){
		//centering with css
		centerPopup('#newOrg');
		//load popup
		loadPopup('#newOrg');
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactCloseOrg").click(function(){
		disablePopup('#newOrg');
	});
	//Click out event!
	$("#backgroundPopupOrg").click(function(){
		disablePopup('#newOrg');
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus==1){
			disablePopup('#newOrg');
		}
	});
	


});