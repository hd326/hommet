@extends('main')
@section('content')
<div id="show-property-hero">

    <div class="show-property-hero-background-image"></div>
    <div id="show-property-hero-background-image-helper"></div>
    <div id="show-property-hero-background-text"></div>

</div>

<img id="show-property-main-picture" src="../images/11.jpg">

<div id="show-property-slider-container-main">
    <div id="show-property-arrow-left" class="show-property-arrow"></div>
    <div id="show-property-slider">
        <!-- overflow hidden on our above parent -->
        <div id="show-property-slider-container">
            <div class="properties properties1" id="lastClone">
                <div class="properties-content">
                        <img src="../images/17.jpg">
                        <img src="../images/18.jpg">
                        <img src="../images/19.jpg">
                        <img src="../images/18.jpg">
                        <img src="../images/17.jpg">
                </div>
            </div>
            <div class="properties properties2">
                <div class="properties-content">
                        <img src="../images/11.jpg">
                        <img src="../images/12.jpg">
                        <img src="../images/13.jpg">
                        <img src="../images/12.jpg">
                        <img src="../images/11.jpg">
                </div>
            </div>
            <div class="properties properties3">
                <div class="properties-content">
                        <img src="../images/14.jpg">
                        <img src="../images/15.jpg">
                        <img src="../images/16.jpg">
                        <img src="../images/15.jpg">
                        <img src="../images/14.jpg">
                </div>
            </div>
            <div class="properties properties4">
                <div class="properties-content">
                        <img src="../images/17.jpg">
                        <img src="../images/18.jpg">
                        <img src="../images/19.jpg">
                        <img src="../images/18.jpg">
                        <img src="../images/17.jpg">
                </div>
            </div>
            <div class="properties properties5" id="firstClone">
                <div class="properties-content">
                        <img src="../images/11.jpg">
                        <img src="../images/12.jpg">
                        <img src="../images/13.jpg">
                        <img src="../images/12.jpg">
                        <img src="../images/11.jpg">
                </div>
            </div>
        </div>
    </div>
    <div id="show-property-arrow-right" class="show-property-arrow"></div>
</div>


<script>

    function imageGallery()
    {
        const highlight = document.querySelector(".show-property-main-picture");
        const previews = document.querySelectorAll('.properties-content img');
        previews.forEach(preview => {
            preview.addEventListener("click", function(){
                const smallSrc = this.src;
                const bigSrc = smallSrc.replace("small", "");
                highlight.src = bigSrc;
                previews.forEach(preview => preview.classList.remove('room-active'));
                preview.classList.add("room-active");
            });
        });
    }

    imageGallery();
    
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
