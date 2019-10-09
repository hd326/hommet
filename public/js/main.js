var index = 1;
slider(1);

function slideImage(n) {
    index = index + n;
    slider(index);
}

function currentSlide(n) {
    slider(index = n);
}

function slider(n) {
    var i;
    var x = document.getElementsByClassName('hero-background-image');
    var dots = document.getElementsByClassName('dots');
    for (i = 0; i < x.length; i++) {
        if (n > x.length) {
            index = 1;
        }
        if (n < 1) {
            index = x.length;
        }
        x[i].style.opacity = "0";
    }
    x[index - 1].style.opacity = "1";
}