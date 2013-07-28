$(document).ready(function(){
	
		//LOADING POPUP
	//This is used for the login popup
	$("#myImage").click(function(){

	$.fn.popOpen = function(){
		
		popID = $(this).attr('rel'); //Get Popup Name
		popURL = $(this).attr('href'); //Get Popup href to define size
		
		//Pull Query & Variables from href URL
		query= popURL.split('?');
		dim= query[1].split('&');
		popWidth = dim[0].split('=')[1]; //Gets the first query string value
		
		
		//Fade in the Popup and add close button
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend();
		
		//Define margin for center alignment (vertical + horizontal) - we add 80 to the height/width to accomodate for the padding + border width defined in the css
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Apply Margin to Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade in Background
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
	};

	//When you click on a link with class of poplight and the href starts with a # 
	$('a.poplight[href^=#]').click(function() {
		$(this).popOpen(); //Run popOpen function on click
		return false;
	});
	
	$('a.poplight[href=#?w=350]').popOpen(); //Run popOpen function once on load
	
	//Close Popups and Fade Layer
	$('a.close, #fade').live('click', function() { //When clicking on the close or fade layer...
	  	$('#fade , .popup_block').fadeOut(); //fade them both out
		$('#fade').remove();
		return false;
	});


	popOpen
	}
}