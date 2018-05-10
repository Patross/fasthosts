$(function () {

    //helper vars
    let width = 720;
    let animationSpeed = 1000;
    let pauseTime = 4000;
    let currentSlide = 1;
    
    //cache elements
    let $slideContainer = $('.slides');
    let $slides = $('.slide');
    
    //animation function
        let interval = setInterval(function() {
            $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
                if (++currentSlide === $slides.length) {
                    currentSlide = 1;
                    $slideContainer.css('margin-left', 0);
                }
            });
        }, pauseTime);
});