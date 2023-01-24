//SCROLL TO TOP

$(document).ready(function() {

    $("h1").delay("0").fadeIn();

    // hide #back-top first
    $("#back-top").hide();

    // fade in #back-top
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 500) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('a#back-top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 0);
            return false;
        });
    });
});

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


//SCROLL TO BOTTOM FADE OUT

$(window).scroll(function() {
    $(".header-arrow").css("opacity", 1 - $(window).scrollTop() / 250);
});


//PARALLAX
if (window.screen.width > 1250) {
    var velocity = 0.2;

    function update() {
        var pos = $(window).scrollTop();
        $('.parallax').each(function() {
            var $element = $(this);
            var height = $element.height() - 18;
            $(this).css('backgroundPosition', '50% ' + Math.round((height - pos) * velocity) + 'px');
        });
    };
    $(window).bind('scroll', update);
}

//MENUBAR SLIDE DOWN

function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
