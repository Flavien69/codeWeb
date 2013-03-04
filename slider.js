$(document).ready(function(){ 
	slid = new slider("#galerie");
	});

var slider = function(id){
	self=this;
	this.div = $(id);
	this.slider = this.div.find('.slider');
	this.largeurCache = this.div.width();
	this.largeur=0;
	this.div.find('span').each(function(){
		self.largeur += $(this).width();
		self.largeur += parseInt ($(this).css("padding-left"));
		self.largeur += parseInt ($(this).css("padding-right"));
		self.largeur += parseInt ($(this).css("margin-left"));
		self.largeur += parseInt ($(this).css("margin-right"));
	});
	this.prec = this.div.find('.prec');
	this.suiv = this.div.find('.suiv');
	this.saut = this.largeurCache;
	this.nbEtapes = Math.ceil(this.largeur/this.saut - this.largeurCache/this.saut);
	this.courant=0;
	
	$(function clip(){
		if(self.courant == -1){
			self.courant++;
			self.slider.animate({
				left: -self.courant*self.saut
			},10);
		}
		if(self.courant < self.nbEtapes){
			self.courant++;
			self.slider.animate({
				left: -self.courant*self.saut
			},1000);
		}
	 	if(self.courant == self.nbEtapes){
	 		self.courant = -1;
	 	}
	 	setTimeout(clip,2000);

	});
	
	this.suiv.click(function (){
		if(self.courant < self.nbEtapes){
			self.courant++;
			self.slider.animate({
				left: -self.courant*self.saut
			},500);
		}
	});
	
	this.prec.click(function(){
		if(self.courant > 0){
			self.courant--;
			self.slider.animate({
				left: -self.courant*self.saut
			},1000);
		}

	});
};



