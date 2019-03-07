
// START SLIDER DESKTOP

var bg = document.querySelector('body');

function next() {
    setTimeout(function() {
        bg.style.cssText =
        `background: url(../public/images/slider/bgSliderTwo.jpg) no-repeat;
        background-size: 100%;
        height: 100%;`;
    }, 2000);

    setTimeout(function() {
        bg.style.cssText =
        `background: url(../public/images/slider/bgSliderThree.jpg) no-repeat;
        background-size: 100%;
        height: 100%;`;
    }, 5000);

    setTimeout(function() {
        bg.style.cssText =
        `background: url(../public/images/slider/bgSliderOne.jpg) no-repeat;
            background-size: 100%;
            height: 100%;`;
    }, 8000);
}

next();

setInterval(next, 10000);

// END SLIDER DESKTOP