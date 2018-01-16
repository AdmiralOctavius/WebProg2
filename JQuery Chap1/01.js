$(() => {
	$('h3.poem-title').click(function() {
		$("#" + $(this).attr("id") + " div.poem-stanza").addClass('highlight');
	});
});

