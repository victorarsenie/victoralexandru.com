//Scroll effects
function onScroll(event){
	var scrollPosition = $(document).scrollTop();
	
	if ( scrollPosition > $('#about').offset().top - 70 ) { 
		$('.pageNav').addClass('scrollNav');
	} else {
		$('.pageNav').removeClass('scrollNav');
	}
	
	//Show scroll to top icon
	if ( scrollPosition > 600 ) { 
		$('.scroll-top').fadeIn();
	} else {
		$('.scroll-top').fadeOut();
	}
	
	$('#pageNav ul li a').each(function () {
		
		var currentLink = $(this);
		
		var reffferenceElement = $(currentLink.attr('href'));
		
		var position = reffferenceElement.position();
		var positionTop = position.top - 30;
		var topPlusHeight = positionTop + reffferenceElement.height();

		if (positionTop <= scrollPosition && topPlusHeight > scrollPosition) {
			$('#pageNav ul li a').parent('li').removeClass("active");
			currentLink.parent('li').addClass("active");
		}
		else{
			currentLink.parent('li').removeClass("active");
		}
	});
}

//smoothscroll
function smoothScroll(element) {
	$('html, body').animate({
		scrollTop: $( $.attr(element, 'href') ).offset().top
	}, 500);
}

//Check if email is correct
function is_email(email){      
	var emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	return emailReg.test(email); 
} 