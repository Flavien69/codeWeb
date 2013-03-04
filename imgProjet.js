jQuery(function($){
	
	var current = null;
	var topPos = parseInt($('#content_projets a:first span.descr').css('top'));
	var leftPos = parseInt($('#content_projets a:first span.title').css('left'));

	$('#content_projets a').mouseover(function(){
		
		if(current && $(this).index() != current.index()){
			current.find('span.bg').stop().fadeOut();	
			current.find('span.title').show().animate({
				left: leftPos -20,
				opacity : 0
			});
			
			current.find('span.descr').show().animate({
				top: topPos +25,
				opacity : 0
			});
		}	
		if(current && $(this).index() == current.index()){
			return null;
		}
		$(this).find('span.bg').hide().stop().fadeTo(500,0.7);
		$(this).find('span.descr').css({
			opacity:0,
		top : topPos+25		
		}).animate({
			opacity:1,
			top:topPos
		});
		
		$(this).find('span.title').css({
			opacity:0,
		left : leftPos+20		
		}).animate({
			opacity:1,
			left:leftPos
		});
		current = $(this);
	});
});