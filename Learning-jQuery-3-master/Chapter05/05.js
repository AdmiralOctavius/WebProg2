$(()	=>	{
    $('p').text(function(){
      return $(this).text().replace("Circle", "Square");
    })
    const	$notes	=	$('<ol	id="notes"></ol>')
        .insertBefore('#footer');

    $('div.chapter	p:eq(0)')
			.clone()
    .insertBefore('div.chapter');

    $('span.footnote')
.each((i,	span)	=>	{
$(span)
  .before([
      '<a	href="#footnote-',
      i	+	1,
      '"	id="context-',
      i	+	1,
      '"	class="context">',
      '<sup>',
      i	+	1,
      '</sup></a>'
  ].join(''))
  .appendTo($notes)
  .append([
      '&nbsp;(<a	href="#context-',
      i	+	1,
      '">context</a>)'
].join(''))
.wrap('<li></li>');
});	});
