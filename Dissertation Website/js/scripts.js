
// ScotsCorpus Popup //

		$ (function() {
			var moveLeft = 20;
			var moveDown = 10;

			$('#click-pop').hover(function(e) {
				$('#popup-1').show()
				.css('top', e.pageY + moveDown)
				.css('left', e.pageX + moveLeft)
				.appendTo('body');
			}, function() {
				$('#popup-1').hide();

			});

		});
		
// Observer Popup //

		$ (function() {
			var moveLeft = 20;
			var moveDown = 10;

			$('#click-pop-2').hover(function(e) {
				$('#popup-2').show()
				.css('top', e.pageY + moveDown)
				.css('left', e.pageX + moveLeft)
				.appendTo('body');
			}, function() {
				$('#popup-2').hide();

			});

		});

// AntConc Popup //

		$ (function() {
			var moveLeft = 20;
			var moveDown = 10;

			$('#click-pop-3').hover(function(e) {
				$('#popup-3').show()
				.css('top', e.pageY + moveDown)
				.css('left', e.pageX + moveLeft)
				.appendTo('body');
			}, function() {
				$('#popup-3').hide();

			});

		});
		
// Overlap Popup //

		$ (function() {
			var moveLeft = 20;
			var moveDown = 10;

			$('#click-pop-4').hover(function(e) {
				$('#popup-4').show()
				.css('top', e.pageY + moveDown)
				.css('left', e.pageX + moveLeft)
				.appendTo('body');
			}, function() {
				$('#popup-4').hide();

			});

		});
		
		
// Sisters Chart & Student Chart //

function chart() {
	var chart = new CanvasJS.Chart("sistersChart",
	{
		animationEnabled: true,
		
		data: [
		{
			type: "column", //change type to bar, line, area, pie, etc
			dataPoints: [
				{ label: "Self-Repair", y: 41 },
				{ label: "Other-Repair", y: 22 },
				{ label: "Other-Initiated",  y: 22 },                                    
				{ label: "Banter",  y: 1 },
			]
		}
		]
		});

	chart.render();

	var chart = new CanvasJS.Chart("studentsChart",
	{
		animationEnabled: true,
		data: [
		{
			type: "column", //change type to bar, line, area, pie, etc
			dataPoints: [
				{ label: "Self-Repair", y: 42 },
				{ label: "Other-Repair", y: 13 },
				{ label: "Other-Initiated",  y: 19 },                                    
				{ label: "Banter",  y: 5 },
			]
		}
		]
		});

	chart.render();
}

// CALL BOTH FUNCTIONS //
window.onload = chart;

//SCROLL TO TOP 

	$(document).ready(function() {

//WINDOW ON TOP?

		$(window).scroll(function() {
			if ($(this).scrollTop() > 100) {
		$('.scrollToTop').fadeIn();
			} else {
		$('.scrollToTop').fadeOut();
		}
	});

//CLICK TO SCROLL

	$('.scrollToTop').click(function() {
		$('html, body').animate({scrollTop: 0},800);
			return false;
		});
});

