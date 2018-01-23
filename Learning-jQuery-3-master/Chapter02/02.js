// This is the custom JavaScript file referenced by index.html. You will notice
// that this file is currently empty. By adding code to this empty file and
// then viewing index.html in a browser, you can experiment with the example
// page or follow along with the examples in the book.
//
// See README.txt for more information.
$(() => {
$('#selected-plays > li')
    .addClass('horizontal');
$('#selected-plays li:not(.horizontal)')
    .addClass('sub-level');
$('#selected-plays li:not(.sub-level)')
    .addClass('big-letter');

//Copy Pasted in
$('a[href^="mailto:"]')
    .addClass('mailto');
$('a[href$=".pdf"]')
    .addClass('pdflink');
$('a[href^="http"][href*="henry"]')
    .addClass('henrylink');

//$('tr:even').addClass('alt');
//$('tr:nth-child(odd)').addClass('alt');
$('tr')
    .filter(':even')
    .addClass('alt');

$('td:contains(Henry)')
    .next()
    .addClass('highlight');

$('a')
		.filter((i,	a)	=> a.hostname	&&	a.hostname	!==	location.hostname)
				.addClass('external');

$('td:contains(Henry)')
	 .parent()
   .children()
   .addClass('highlight');

const	forText	=	[];
	 for	(let	td	of	$('td'))	{
			if	(td.textContent.startsWith('H'))	{
				forText.push(td.textContent);
			}
}
	 console.log('for',	forText);


console.log($('.highlight').get(0).tagName);


});
