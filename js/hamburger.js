if (window.screen.width > 1250) {
    $('#container').mouseleave(function(e) {
        TweenMax.to(this, 0.3, { height: 80, width: 80 });
        TweenMax.to('.circle, .hamburger', 0.3, { scale: 1, x: 0, y: 0 });
    });

    $('#container').mouseenter(function(e) {
        TweenMax.to(this, 0.3, { height: 120, width: 120 });
        TweenMax.to('.circle', 0.3, { scale: 1 });
    });

    $('#container').mousemove(function(e) {
        callParallax(e);
    });

    function callParallax(e) {
        parallaxIt(e, '.circle', 80);
        parallaxIt(e, '.hamburger', 40);
    }

    function parallaxIt(e, target, movement) {
        var $this = $('#container');
        var relX = e.pageX - $this.offset().left + 0.2 * ($this.offset().left);
        var relY = e.pageY - $this.offset().top;

        TweenMax.to(target, 0.3, {
            x: (relX - $this.width() / 2) / $this.width() * movement,
            y: (relY - $this.height() / 2) / $this.height() * movement,
            ease: Power2.easeOut
        });
    }
}
