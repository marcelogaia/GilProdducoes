var landing 			= $('#landing')
var section 			= $('#section');
var socialTitle 		= $('#social h2');
var corporativoTitle 	= $("#corporativo h2");
var socialImg 			= $('#social-img');
var corporativoImg 		= $('#corporativo-img');

var mouseX 				= 0;
var relMouseX 			= 480;
var xp 					= 480;
var duration 			= 500;
frameRate 				= 30;
timeInterval 			= Math.round( 1000 / frameRate );

section.mouseenter(function(e){
	// Get mouse position
	section.mousemove(function(e){
	   	// raw mouse position
	   	mouseX = e.pageX;
	   	// mouse position relative to face div
	   	relMouseX = mouseX - landing.offset().left;

	});

	// Animate the face based on mouse movement
	loop = setInterval(function(){

		// zeno's paradox dampens the movement
		xp += (relMouseX - xp) / 12	;

		socialImg.css({width:380 + (480 - xp) * 0.5, left: 100 + (480 - xp) * 0.1});
	    corporativoImg.css({right: - (480 - xp) * 0.1});

	    socialTitle.css({opacity: ((960 - xp*1.4)/480), left: 120 + (480 - xp) * 0.1});
	    corporativoTitle.css({opacity: xp/480 - .4, right: 140 - (480 - xp) * 0.1});

	}, timeInterval );

}).mouseleave(function(e){ 

	// reset the face to initial state
	clearInterval(loop);
	xp 			= 480;
	mouseX 		= 0;
	relMouseX 	= 480;

	socialImg.hoverFlow(e.type, {width: 380, left: 100}, duration, 'easeOutQuad');
	corporativoImg.hoverFlow(e.type, {right: 0}, duration, 'easeOutQuad');
	socialTitle.hoverFlow(e.type, {opacity: .65, left: 120}, duration, 'easeOutQuad');
	corporativoTitle.hoverFlow(e.type, {opacity: .65,right: 140}, duration, 'easeOutQuad');

});

/*
* hoverFlow - A Solution to Animation Queue Buildup in jQuery
* Version 1.00
*
* Copyright (c) 2009 Ralf Stoltze, http://www.2meter3.de/code/hoverFlow/
*/
(function( $ ){

	$.fn.hoverFlow = function(type, prop, speed, easing, callback) {
		// only allow hover events
		if ($.inArray(type, ['mouseover', 'mouseenter', 'mouseout', 'mouseleave']) == -1) {
			return this;
		}
	
		// build animation options object from arguments
		// based on internal speed function from jQuery core
		var opt = typeof speed === 'object' ? speed : {
			complete: callback || !callback && easing || $.isFunction(speed) && speed,
			duration: speed,
			easing: callback && easing || easing && !$.isFunction(easing) && easing
		};
		
		// run immediately
		opt.queue = false;
			
		// wrap original callback and add dequeue
		var origCallback = opt.complete;
		opt.complete = function() {
			// execute next function in queue
			$(this).dequeue();
			// execute original callback
			if ($.isFunction(origCallback)) {
				origCallback.call(this);
			}
		};
		
		// keep the chain intact
		return this.each(function() {
			var $this = $(this);
		
			// set flag when mouse is over element
			if (type == 'mouseover' || type == 'mouseenter') {
				$this.data('jQuery.hoverFlow', true);
			} else {
				$this.removeData('jQuery.hoverFlow');
			}
			
			// enqueue function
			$this.queue(function() {				
				// check mouse position at runtime
				var condition = (type == 'mouseover' || type == 'mouseenter') ?
					// read: true if mouse is over element
					$this.data('jQuery.hoverFlow') !== undefined :
					// read: true if mouse is _not_ over element
					$this.data('jQuery.hoverFlow') === undefined;
					
				// only execute animation if condition is met, which is:
				// - only run mouseover animation if mouse _is_ currently over the element
				// - only run mouseout animation if the mouse is currently _not_ over the element
				if(condition) {
					$this.animate(prop, opt);
				// else, clear queue, since there's nothing more to do
				} else {
					$this.queue([]);
				}
			});

		});
	};

})( jQuery );
