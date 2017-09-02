(function ($, root, undefined) {

	$(function () {

		'use strict';
		// DOM ready, take it away
		var activeHours = false;
		$('.hours-link a').click(function(){
			if(!activeHours){
				$('.global-hours').velocity("transition.slideRightBigIn", { duration: 250 });
				activeHours = true;
		    } else {
				$('.global-hours').velocity("transition.slideRightBigOut", { duration: 250 });
				activeHours = false;
		    }
		});
	});

})(jQuery, this);
