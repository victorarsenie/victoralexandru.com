//Scroll effects
function onScroll(event){
	var scrollPosition = $(document).scrollTop();
	
	if ( scrollPosition > $('#about').offset().top - 90 ) { 
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
	
	if (scrollPosition > $('#about').position().top - 2) {
		//Skills progress bar
		progressBar(75, $('#progressBarHTML'));
		progressBar(73, $('#progressBarCSS'));
		progressBar(70, $('#progressBarJava'));
		progressBar(70, $('#progressBarJquery'));
		progressBar(73, $('#progressBarBoot'));
		progressBar(62, $('#progressBarAjax'));
		progressBar(53, $('#progressBarJson'));
		progressBar(37, $('#progressBarXML'));
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