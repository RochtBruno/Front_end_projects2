//menu mobile

$('nav.mobile-menu i').click(function(){
    $(this).parent().find('ul').slideToggle();
})

// menu scroll top

$(function(){
	$('nav a').click(function(){

		var href = $(this).attr('href');
		var offSetTop = $(href).offset().top;

		$('html,body').animate({'scrollTop':offSetTop});

		return false;
	})
})