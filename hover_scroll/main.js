

var main = {
	init: function() {
		$.fn.hoverscroll.params = $.extend($.fn.hoverscroll.params, {
			debug: true
		});
		
		$('#my-horizontal-list, #my-list').hoverscroll();
	}
};

$(document).ready(function() {
	main.init();
});
