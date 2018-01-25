// This is the custom JavaScript file referenced by index.html. You will notice
// that this file is currently empty. By adding code to this empty file and
// then viewing index.html in a browser, you can experiment with the example
// page or follow along with the examples in the book.
//
// See README.txt for more information.
$(document).ready(function(){

	$(()	=>	{
					$('#switcher')
							.click((e)	=>	{
									$(e.currentTarget)
											.children('button')
.toggleClass('hidden');
				});
}); $(()	=>	{
		$('#switcher-default')
				.addClass('selected');
		$('#switcher	button')
				.click((e)	=>	{
						const	bodyClass	=	e.target.id.split('-')[1];
						$('body')
								.removeClass()
								.addClass(bodyClass);
						$(e.target)
								.addClass('selected')
								.removeClass('selected');
						e.stopPropagation();
				});
});
});
