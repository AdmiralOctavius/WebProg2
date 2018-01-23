// This is the custom JavaScript file referenced by index.html. You will notice
// that this file is currently empty. By adding code to this empty file and
// then viewing index.html in a browser, you can experiment with the example
// page or follow along with the examples in the book.
//
// See README.txt for more information.
$(()	=>	{
		$('#switcher-default')
				.on('click',	()	=>	{
						$('body')
								.removeClass('narrow')
								.removeClass('large');
		});
		$('#switcher-narrow')
				.on('click',	()	=>	{
						$('body')
								.addClass('narrow')
								.removeClass('large');
    });
		$('#switcher-large')
				.on('click',	()	=>	{
						$('body')
								.removeClass('narrow')
								.addClass('large');
    });	
});
