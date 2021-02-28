jQuery( document ).ready(function( $ ) {

	console.log("w30 is starting up");
});


jQuery(document).ready(function($) {

	if (!window.nw) window.nw = {};

	window.nw.hookBlockLinks = function() {

		console.log('Hooking block linked lists');

		$('.block-list').on('click', '> li, > article', function(e) {

			e.preventDefault();
			var href = $(this).find('a.more').attr('href');

			console.log('Block link target: ' + href);

			if (typeof href !== 'undefined' && href.length)
				window.location = href;
			else
				console.log('Block link target not found!');

			return false;
		});

	};

	window.nw.hookBlockLinks();

});
