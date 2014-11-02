'use strict';

(function($) {
	var initToggle = function( toggleSelector, targetWrapperSelector ) {
		$(toggleSelector).on('click', function(e) {
			e.preventDefault();
			$(this).parents(targetWrapperSelector).toggleClass('open');
		});
	};
	var resizeRatio = function( selector, ratio ) {
		var resize = function() {
			$(selector).each(function() {
				var width = $(this).width();
				if( width === 0 ) { return; }
				$(this).height( width/ratio );
			});
		};
		resize();

		$(window).resize(resize);
	};

	$(function() {
		initToggle('.site-search-toggle', '.site-search');
		resizeRatio('.media', 16/9);
	});
})(jQuery);