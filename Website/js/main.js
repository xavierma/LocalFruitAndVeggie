$(document).ready(function(){

	var nav = $('.navbar-default');

	$(window).scroll(function(){
		var scroll = $(window).scrollTop();


		if(scroll >= 200){
			nav.css('background-color','#fff');
			nav.css('border-bottom','1px solid #eee');
			$('.navbar-default .navbar-nav > li > a').css('color','#63c888');
			$('.navbar-default .navbar-nav>li>a#last-item').css('display','block');
			$('.navbar-brand').css('color','#63c888');
			$('#logo').attr('src','img/fv-green.png');
		}
		else{
			nav.css('background-color','rgba(255, 255, 255, 0)');
			nav.css('border-width','0px');
			$('.navbar-default .navbar-nav > li > a').css('color','#fff');
			$('.navbar-default .navbar-nav>li>a#last-item').css('display','none');
			$('.navbar-brand').css('color','#fff');
			$('#logo').attr('src','img/fv-white.png');
		}
	});
});