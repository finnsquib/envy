/**
 * author Justin Bartlett 2012
 */


//functions outside of the DOM load.
	
function slideright()
{

	//$("#teampanel").hide();
	var $centermenu = $("#centermenu");
	$("#teampanel").animate({opacity: 0}, "fast");
	// emulate the behaviour of the a:current css rule
	// make all ul li elements in the nav white
	// and the clicked element grey.
	$(".slideright").css("color", "#fff");
	$(this).css("color", "#666");
	
	$centermenu.animate({ left: "237px", opacity: 0.8});
}

function mapSlider()
{
	
	$("#teampanel").show();
	//$("#teampanel").css("display", "inline");
	$(".slider").css("color", "#fff");
	$(this).css("color", "#666");
	
	var slidetoggle = $("#teampanel").css("left");
	
	if (slidetoggle == "1024px")
	{
		slideTheMember();
	} else
	{
		$("#teampanel").animate({opacity: 0}, "fast", function()
		{
			$("#teampanel").css("left", "1024px");
			slideTheMember();
		});
	}
	
	function slideTheMember()
	{
	    $("#teampanel").animate({ left: "488px", opacity: 0.8}, "fast");
	}
}

function hideItems()
{
	$("#stylingbox").css("display", "none");
	$("#cuttingbox").css("display", "none");
	$("#coloursbox").css("display", "none");
	$("#techcoloursbox").css("display", "none");
	$("#juniorbox").css("display", "none");
	$("#gentsbox").css("display", "none");
	$("#over65sbox").css("display", "none");
	$("#academystylingsbox").css("display", "none");
	$("#hairextensionsbox").css("display", "none");
	$("#permsbox").css("display", "none");
	$("#recommendsbox").css("display", "none");
	$("#loyaltysbox").css("display", "none");
	$("#weddingsbox").css("display", "none");
	$("#indulgebox").css("display", "none");
}

// functions after DOM load

$(document).ready(function()
{
	//slides the main content panel (teampanel) in from the left
	$(document).on("click", ".slider", function(event)
	{
		$("#teampanel").show();
		var itemToShow = "#" + event.target.id + "box";

		$("#stylingbox").css("display", "none");
		$("#cuttingbox").css("display", "none");
		$("#coloursbox").css("display", "none");
		$("#techcoloursbox").css("display", "none");
		$("#juniorbox").css("display", "none");
		$("#gentsbox").css("display", "none");
		$("#over65sbox").css("display", "none");
		$("#academystylingsbox").css("display", "none");
		$("#hairextensionsbox").css("display", "none");
		$("#permsbox").css("display", "none");
		$("#recommendsbox").css("display", "none");
		$("#loyaltysbox").css("display", "none");
		$("#weddingsbox").css("display", "none");
		$("#indulgebox").css("display", "none");
		
		$(".slider").css("color", "#fff");
		
		$(this).css("color", "#666");
		
		// get the current left property of the teampanel
		var slidetoggle = $("#teampanel").css("left");
		
		// if it is off screen
		if (slidetoggle == "1024px")
		{
			// slide it onscreen and make it less transparent
			slideTheMember();
			$(itemToShow).show();
		} else
		{
			// it is onscreen already, so fade it out
			// and then move it back offscreen
			$("#teampanel").animate({opacity: 0}, "fast", function()
			{
				$("#teampanel").css("left", "1024px");
				// and now slide the new content on.
					
				slideTheMember();
				$(itemToShow).show();
			});	
		}
		
		function slideTheMember()
		{
			$("#teampanel").animate({opacity: 0}, "fast");
		    $("#teampanel").animate({ left: "488px", opacity: 0.8}, "fast");
		}
		
	});
	
	$(document).on("click", ".loadsecondlevelmenu", function(event)
	{
		$("#removable").empty();
		
	});
});