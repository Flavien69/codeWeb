$(document).ready(function(){ 
	scroll = new scrolleur("#scrollTop", "#scrollTop a");

});

var scrolleur = function(id,id1){
	self=this;
	this.div = $(id);
	this.div1 = $(id1);
	this.div.hide();
	
	$(function(){
		$(window).scroll(function(){
			if($(this).scrollTop() > 200){
				self.div.fadeIn();
			}
			else{
				self.div.fadeOut();				
			}
			
		});
	});
	
	this.div1.click(function(){
		$("body,html").animate({
			scrollTop:0
		},500);
		return false;
	});
};



