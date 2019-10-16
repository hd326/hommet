@extends('main')
@section('content')
<div id="show-property-hero">

    <div class="show-property-hero-background-image"></div>
    <div id="show-property-hero-background-image-helper"></div>
    <div id="show-property-hero-background-text"></div>

</div>

<div id="show-property-main-picture">

</div>

<div id="show-property-slider-container-main">
    <div id="show-property-arrow-left" class="show-property-arrow"></div>
    <div id="show-property-slider">
        <!-- overflow hidden on our above parent -->
        <div id="show-property-slider-container">
            <div class="properties properties1" id="lastClone">
                <div class="properties-content">
                        <a href="../images/17.jpg" data-lightbox="mygallery"><img src="../images/17.jpg"></a>
                        <a href="../images/18.jpg" data-lightbox="mygallery"><img src="../images/18.jpg"></a>
                        <a href="../images/19.jpg" data-lightbox="mygallery"><img src="../images/19.jpg"></a>
                        <a href="../images/18.jpg" data-lightbox="mygallery"><img src="../images/18.jpg"></a>
                        <a href="../images/17.jpg" data-lightbox="mygallery"><img src="../images/17.jpg"></a>
                </div>
            </div>
            <div class="properties properties2">
                <div class="properties-content">
                        <a href="../images/11.jpg" data-lightbox="mygallery"><img src="../images/11.jpg"></a>
                        <a href="../images/12.jpg" data-lightbox="mygallery"><img src="../images/12.jpg"></a>
                        <a href="../images/13.jpg" data-lightbox="mygallery"><img src="../images/13.jpg"></a>
                        <a href="../images/12.jpg" data-lightbox="mygallery"><img src="../images/12.jpg"></a>
                        <a href="../images/11.jpg" data-lightbox="mygallery"><img src="../images/11.jpg"></a>
                </div>
            </div>
            <div class="properties properties3">
                <div class="properties-content">
                        <a href="../images/14.jpg" data-lightbox="mygallery"><img src="../images/14.jpg"></a>
                        <a href="../images/15.jpg" data-lightbox="mygallery"><img src="../images/15.jpg"></a>
                        <a href="../images/16.jpg" data-lightbox="mygallery"><img src="../images/16.jpg"></a>
                        <a href="../images/15.jpg" data-lightbox="mygallery"><img src="../images/15.jpg"></a>
                        <a href="../images/14.jpg" data-lightbox="mygallery"><img src="../images/14.jpg"></a>
                </div>
            </div>
            <div class="properties properties4">
                <div class="properties-content">
                        <a href="../images/17.jpg" data-lightbox="mygallery"><img src="../images/17.jpg"></a>
                        <a href="../images/18.jpg" data-lightbox="mygallery"><img src="../images/18.jpg"></a>
                        <a href="../images/19.jpg" data-lightbox="mygallery"><img src="../images/19.jpg"></a>
                        <a href="../images/18.jpg" data-lightbox="mygallery"><img src="../images/18.jpg"></a>
                        <a href="../images/17.jpg" data-lightbox="mygallery"><img src="../images/17.jpg"></a>
                </div>
            </div>
            <div class="properties properties5" id="firstClone">
                <div class="properties-content">
                        <a href="../images/11.jpg" data-lightbox="mygallery"><img src="../images/11.jpg"></a>
                        <a href="../images/12.jpg" data-lightbox="mygallery"><img src="../images/12.jpg"></a>
                        <a href="../images/13.jpg" data-lightbox="mygallery"><img src="../images/13.jpg"></a>
                        <a href="../images/12.jpg" data-lightbox="mygallery"><img src="../images/12.jpg"></a>
                        <a href="../images/11.jpg" data-lightbox="mygallery"><img src="../images/11.jpg"></a>
                </div>
            </div>
        </div>
    </div>
    <div id="show-property-arrow-right" class="show-property-arrow"></div>
</div>


<script>

    
    let pSlider = document.querySelector('#show-property-slider-container'),
        p = document.querySelectorAll('.properties'),
        pArrowLeft = document.querySelector("#show-property-arrow-left"),
        pArrowRight = document.querySelector("#show-property-arrow-right");

    var currentProperties = 1;
    pSlider.style.marginLeft = '-100%';
    
    function pSlideRight(){
        if (currentProperties >= p.length - 1) return;
        currentProperties++;
        pSlider.style.transition = '0.5s ease-in-out';
        pSlider.style.marginLeft = '-100' * currentProperties + '%';
    }
    
    function pSlideLeft(){
        if (currentProperties <= 0) return;
        currentProperties--;
        pSlider.style.transition = '0.5s ease-in-out';
        pSlider.style.marginLeft = '-100' * currentProperties + '%';
    }

    pArrowRight.addEventListener('click', function() {
        pSlideRight();
    });

    pArrowLeft.addEventListener('click', function() {
        pSlideLeft();
    });

    pSlider.addEventListener('transitionend', function() {
        if (p[currentProperties].id === 'lastClone') {
            pSlider.style.transition = "none";
            currentProperties = p.length - 2;
            pSlider.style.marginLeft = '-100' * currentProperties + '%';

        }
        if (p[currentProperties].id === 'firstClone') {
            pSlider.style.transition = "none";
            currentProperties = p.length - currentProperties;
            pSlider.style.marginLeft = '-100' * currentProperties + '%';
        }
    });
    
    
</script>
@endsection
