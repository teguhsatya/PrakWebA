//ketika press "enter" maka akan ter-submit
$('input').keypress(function(event){
	if(event.which === 13){
		var todoText = $(this).val();
		$(this).val("");
		$('ul').append('<li>' + todoText + '<span><i class="fa fa-trash"</i></span>');
	}
});

//remove dengan mengclick span
$('ul').on('click', "span" , function(event){
	$(this).parent().fadeOut(500,function(){
		$(this).remove();
	});
	event.stopPropagation();
});

//strikethrough
$('ul').on('click', 'li', function(){
	$(this).toggleClass('done');
});