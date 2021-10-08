$(document).ready(function(){
	$(window).scroll(function (event) {
	    var scroll = $(window).scrollTop();
	    if (scroll>20) {
	    	$('#navbar').addClass('sticky');
			$('.logoImg').attr('src','img/logo.png')
	    }else{
	    	$('#navbar').removeClass('sticky');
			$('.logoImg').attr('src','img/logo.gif')
	    }
	});

	
});