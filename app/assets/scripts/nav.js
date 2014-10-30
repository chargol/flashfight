$( document ).ready(function() {
	
	var nav  = $('#nav-primary');
	var navShowBtn = $('.nav-show-btn');
	var navCloseBtn = $('.nav-close-btn');
	
	navShowBtn.on('click', function (e) 
	{
		nav.removeClass('nav-hide');
	});

	navCloseBtn.on('click', function (e) 
	{
		nav.addClass('nav-hide');
	});

});