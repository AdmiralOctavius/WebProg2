$(() => {
  $('#selected-plays > li')
    .addClass('horizontal');
  $('#selected-plays	li:not(.horizontal)')
		.addClass('sub-level');
  $('#selected-plays	li:not(.sub-level)')
		.addClass('big-letter');

  $('a[href^="mailto:"]')
    .addClass('mailto');
  $('a[href$=".pdf"]')
    .addClass('pdflink');
  $('a[href^="http"][href*="henry"]')
    .addClass('henrylink');

  $('li.horizontal:eq(1)').css("font-size", "20px");


});
