$(document).ready(function(){
	$('#nav_projets li a ').click(function(){
		$('#nav_projets li a').removeClass('active');
		$(this).addClass('active');
		var id = $(this).attr('href');
		scrollTo(id);
		return false;
	});
	
	function scrollTo(target){
		if($(target).length >=1){
			height = $(target).offset().top - 70 ;
		}
		$('html, body').animate({scrollTop: height},1000);
		return false;
		
	}
});