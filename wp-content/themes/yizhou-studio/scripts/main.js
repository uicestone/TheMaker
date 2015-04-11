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

	var initPaging = function(pagingSelector, templateId, wrapperSelector) {
		var $wrapper = $(wrapperSelector);
		var dataSource = $wrapper.data('pagingSrc');
		var totalPages = $wrapper.data('pagingTotal');
		var loading = false;
		var $prev = $(pagingSelector).find('.paging-prev').hide(),
			$next = $(pagingSelector).find('.paging-next').toggle( totalPages>1 );
		
		var currentPage = function() {
			return $wrapper.data('page');
		};
		var nextPage = function(target) {
			if( target.toString().match(/^[\+\-]/) ) {
				return eval( currentPage() + target.toString() )
			} else {
			 	return target;
			}
		};
		var goPage = function(target) {
			var targetPage = nextPage(target);
			var isPrev = targetPage < currentPage();

			if( $wrapper.hasClass('loading') ) { return; }
			$wrapper.addClass('loading');

			$.ajax({
				url: dataSource + '/page/' + targetPage + '/',
				type: 'GET',
				dataType: 'JSON',
				success: function(result) {
					if( !result || result.length<1 ) { return; }
					var loadedHtml = '<div style="position:absolute; width:100%; top:0; left:' + (isPrev? '-' : '+') + '100%;">';
					var $oldItems = $wrapper.children(),
						$newItems;
					for( var i=0; i<result.length; i++ ) {
						loadedHtml += template( templateId, result[i] );
					}
					loadedHtml += '</div>';

					$wrapper.find(':animated').stop(true, true);

					$newItems = $(loadedHtml).appendTo( $wrapper );
					$wrapper.removeClass('loading');
					$oldItems.animate({
						position: 'relative',
						left: isPrev? '100%' : '-100%'
					});
					$newItems.animate({
						left: 0
					}, function() {
						$(this).css({
							position: 'relative'
						});
						$oldItems.remove();
					});
					$prev.toggle( targetPage > 1 );
					$next.toggle( targetPage < totalPages );
					$wrapper.data('page', targetPage);
				},
				complete: function() {
					$wrapper.removeClass('loading');
				}
			});
		};

		if( $wrapper.length===0 || !dataSource ) { return; }
		template.config('escape', false);

		if( !currentPage() ) {
			$wrapper.data('page', 1).css({
				'position': 'relative',
				'overflow': 'hidden'
			});
		}

		$prev.on('click', function(e) {
			e.preventDefault();
			goPage('-1');
		});
		$next.on('click', function(e) {
			e.preventDefault();
			goPage('+1');
		});
	};


	$(function() {
		initToggle('.site-search-toggle', '.site-search');
		// resizeRatio('.media', 16/9);
		initPaging('.paging-wrapper .paging', 'listing-item-template', '.paging-wrapper .paging-block');
	});
	
	/*content paging*/
	if($('.article-wrapper>.paged').length > 1){
		if($('.article-wrapper>.paged.active').length === 0){
			$('.article-wrapper>.paged:first').addClass('active').show();
		}
		resetPagingButtons();
	}
	
	function resetPagingButtons(){
		$('.paging>.paging-prev, .paging>.paging-next').addClass('hide');
		
		if($('.article-wrapper>.paged:first').get(0) !== $('.article-wrapper>.paged.active').get(0)){
			$('.paging>.paging-prev').removeClass('hide');
		}
		if($('.article-wrapper>.paged:last').get(0) !== $('.article-wrapper>.paged.active').get(0)){
			$('.paging>.paging-next').removeClass('hide');
		}
	}
	
	$('.content.paging>.paging-next').on('click', function(event){
		event.preventDefault();
		var thisPage = $('.article-wrapper>.paged.active');
		var nextPage = thisPage.next('.paged');
		thisPage.fadeOut(500).removeClass('active');
		nextPage.fadeIn(500).addClass('active');
		resetPagingButtons();
	});
	
	$('.content.paging>.paging-prev').on('click', function(event){
		event.preventDefault();
		var thisPage = $('.article-wrapper>.paged.active');
		var nextPage = thisPage.prev('.paged');
		thisPage.fadeOut(500).removeClass('active');
		nextPage.fadeIn(500).addClass('active');
		resetPagingButtons();
	});
	
})(jQuery);