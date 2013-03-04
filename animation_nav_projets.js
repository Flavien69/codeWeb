$(document).ready(function(){ 
	scroll = new anim("#nav_projets");

});

var anim = function(id){
	self=this;
	this.div = $(id);
	this.div.hide();
	
	$(function(){
		$(window).scroll(function(){
			if($(this).scrollTop() > 350){
				self.div.fadeIn();
			}
			else{
				self.div.fadeOut();				
			}
			
		});
	});

};