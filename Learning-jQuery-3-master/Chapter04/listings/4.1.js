$(() => {
  const	$speech	=	$('div.speech');
  const defaultSize = parseFloat($speech.css('fontSize'));
	$('#switcher-large')
		.click(()	=>	{
				const	num	=	parseFloat($speech.css('fontSize'));
				$speech.css('fontSize',	`${num	*	1.4}px`);
	});
  $('#switcher-small')
		.click(()	=>	{
				const	num	=	parseFloat($speech.css('fontSize'));
				$speech.css('fontSize',	`${num	/	1.4}px`);
	});

  $('#switcher-default')
    .click(()	=>	{
        const	num	=	parseFloat($speech.css('fontSize'));
        $speech.css('fontSize',	`${defaultSize}px`);
  });
});
