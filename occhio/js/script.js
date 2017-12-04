$(document).ready(function(){
	$('.but-min').click(function(){
		$('#menu-bar').toggle();
		$('.sub-prod-menu').hide();	
		$('.menu-bar-layout').toggle();
		$('.about_brand').toggle();
		$('.close-but').toggle();
		$('.buts').toggle();
		$('#bg-img').toggleClass('blur');
		$('#menu-bar').toggleClass('flex-for-menu-bar');
	})
	
	$('.sub-prod').click(function(){
		$('.sub-prod-menu').not($(this).next()).hide();
		$(this).next().toggle();		
	})

	$('#menu-bar a').mouseenter(function(){
		$(this).next().animate({width : '165px'},150);
	})

	$('#menu-bar a').mouseleave(function(){
		$(this).next().animate({width : '0'},150);
	})
	
})