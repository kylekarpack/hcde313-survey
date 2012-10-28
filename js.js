$(window).load(function() {
	
        $( ".sort" ).sortable();
        $( ".sort" ).disableSelection();

	$('.close').click(function() {
		$('#info').fadeOut("slow");
	});
	
	$('#terms').click(function() {
		$('#info').fadeIn("slow");
	});
	
	// Add / Subtract
	$('#p6').click(function() {
		$('#q-six').append("<input name='q6[]' value=''></input>");
	});
	
	$('#m6').click(function() {
		if ($('#q-six input').length > 2) {
			$($('#q-six input')[$('#q-six input').length - 1]).fadeOut("slow").remove();
		}
	});
	
	$('#p7').click(function() {
		$('#q-sev').append("<input name='q7[]' value=''></input>");
	});
	
	$('#m7').click(function() {
		if ($('#q-sev input').length > 2) {
			$($('#q-sev input')[$('#q-sev input').length - 1]).fadeOut("slow").remove();
		}
	});
	
	// Navigation
	var wid = -($('#feedback').outerWidth()) - 50 + "px";
	$('#feedback').css({right:wid});
	
	$('#contact').click(function() {
		$('#contact').hide();
		$('#feedback').animate({right:0}, 500, "swing");
	});
	
	$('.quit').click(function () {
		window.history.back()
	});
	
	$($('input[type="radio"]')[1]).click(function() {
		$("#err").show();
		$("#survey :input").attr("disabled",true)
		$($("#survey :input")[0]).attr("disabled",false);
	});
	
	$($('input[type="radio"]')[0]).click(function() {
		$("#survey :input").attr("disabled",false);
		$("#err").hide();
	});
	
	$( "#bar" ).progressbar({
		value: 0.0000001 //bug?
	});
	
	var per = 0;
	
	$(window).scroll(function() {
	// $('#survey :input').change(function() {
	// }).click(function() {
		//console.log(document.activeElement);
		// if (document.activeElement.name != undefined) {
			// per = (parseInt(document.activeElement.name.replace("q",""))) * (100 / $('#survey .q').length);
		// } else {
			// if (per < 9) {
				// per = 10;
			// } else if (per < 40 && per > 11) {
				// per = 27.272727272;
			// } else {
				// per = 45.454545454;
			// }
		// }
		
		var per = ($(window).scrollTop() / ($(document).height() - $(window).height())) * 100;
		if (per >= 97) {
			$("#masthead h2").text("Finished! Thank you");
			$("#bar").fadeOut("slow");
			$("#top").fadeIn("slow");
		}
		$("#bar .ui-progressbar-value").animate(
			{ width: per + "%"
			}, 30, 'swing');

		// $( "#bar" ).progressbar({
			// value: per
		// });
	});
});