$(function() {
			$("#slideshow > li:gt(0)").hide();
			setInterval(function() {
			  $('#slideshow > li:first')
			    .fadeOut(3000)
			    .next()
			    .fadeIn(3000)
				.end()
			    .appendTo('#slideshow');
			},  5000);
		});