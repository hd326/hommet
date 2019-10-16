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

// start testimonial slider

let testimonialSlider = document.querySelector('#testimonial-slider-container'),
        testimonial = document.querySelectorAll('.testimonial'),
        testimonialArrowLeft = document.querySelector("#testimonial-arrow-left"),
        testimonialArrowRight = document.querySelector("#testimonial-arrow-right");

    var current = 1;
    testimonialSlider.style.marginLeft = '-100%';
    
    function testimonialSlideRight(){
        if (current >= testimonial.length - 1) return;
        current++;
        testimonialSlider.style.transition = '0.5s ease-in-out';
        testimonialSlider.style.marginLeft = '-100' * current + '%';
    }
    
    function testimonialSlideLeft(){
        if (current <= 0) return;
        current--;
        testimonialSlider.style.transition = '0.5s ease-in-out';
        testimonialSlider.style.marginLeft = '-100' * current + '%';
    }

    testimonialArrowRight.addEventListener('click', function() {
        testimonialSlideRight();
    });

    testimonialArrowLeft.addEventListener('click', function() {
        testimonialSlideLeft();
    });

    testimonialSlider.addEventListener('transitionend', function() {
        if (testimonial[current].id === 'lastClone') {
            testimonialSlider.style.transition = "none";
            current = testimonial.length - 2;
            testimonialSlider.style.marginLeft = '-100' * current + '%';

        }
        if (testimonial[current].id === 'firstClone') {
            testimonialSlider.style.transition = "none";
            current = testimonial.length - current;
            testimonialSlider.style.marginLeft = '-100' * current + '%';
        }
    });
    
    setInterval(function(){
        testimonialSlideRight();
    }, 5000);

// end testimonial slider

// begin property slider

