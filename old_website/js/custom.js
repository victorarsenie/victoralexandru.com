// This is a shortcut for $(document).ready()
$(function() {
    
    // This is a shortcut to bind both mouseOver and mouseOut
    $('div.slideOutTab').hover(function() {
        // Animate out when hovered, stopping all previous animations
        $(this)
            .stop(true, false)
            .animate({
                left: 0
            }, 400);
    }, function() {
        // Animate back in when not hovered, stopping all previous animations
        $(this)
            .stop(true, false)
            .animate({
                left: -107
            }, 400);
    });
    
    
});

$(function() {
            var pull        = $('#pull');
                menu        = $('nav ul');
                menuHeight  = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });

            $(window).resize(function(){
                var w = $(window).width();
                if(w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });

$(document).ready(function(){
    
    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    
    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    
});

