jQuery( document ).ready(function( $ ) {

	console.log("w31 is starting up");
});


jQuery(document).ready(function($) {

	if (!window.nw) window.nw = {};

	/* Block linking
		
		Makes list nodes or divs clickable if they contain a link somewhere
		inside. Handy for tiles, cards, and menus.
	*/
	window.nw.hookBlockLinks = function() {

		console.log('Hooking block linked lists');

		$('.block-list').on('click', '> li, > article', function(e) {

			e.preventDefault();
			var href = $(this).find('a.more').attr('href');

			console.log('Block link target: ' + href);

			if (typeof href === 'undefined' || href.length == 0)
				return false
			
			if (e.ctrlKey || e.metaKey)
				window.open(href, '_blank');
			else
				window.location = href;

			return false;
		});

	};
	
	/* */
	window.nw.rainbowizeLinkBorders = function(set) {
		
		var totalLinks = set.length,
			startingHue = 14, 
			maxHue = 255,
			hue = startingHue,
			hueAttr = 'data-hue',
			increment = Math.round( (maxHue - startingHue) / totalLinks );

		if (totalLinks == 0) {
			return;
		}
		
		$(set).each(function(i, o) {
			var link = $(o);
			
			link
				.css('border-bottom-color', 'hsla(' + hue + ', 57%, 62%, .25)')
				.attr('data-hue', hue);
							
			link.hover(function() {
				var d = $(this);
				d.css('border-bottom-color', 'hsla(' + d.attr(hueAttr) + ', 57%, 62%, 1)');
			}, function() {
				var d = $(this);
				$(this).css('border-bottom-color', 'hsla(' +  d.attr(hueAttr) + ', 57%, 62%, .25)');			
			});
			
			hue += increment;
			if (hue > maxHue) hue = startingHue;
		});
	}
	
	/* */
	window.nw.hookRainbowRoad = function() {

		var homeSidebarAnchors = $('aside a');
		var homeMainAnchors = $('section.newest a');
		var homeFeaturedAnchors = $('section.featured a');
		var postAnchors = $('body.single section article a');
				
		window.nw.rainbowizeLinkBorders(homeSidebarAnchors);
		window.nw.rainbowizeLinkBorders(homeMainAnchors);
		window.nw.rainbowizeLinkBorders(homeFeaturedAnchors);
		window.nw.rainbowizeLinkBorders(postAnchors);
	}
	

	window.nw.hookBlockLinks();
	
	window.nw.hookRainbowRoad();

});
