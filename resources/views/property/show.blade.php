@extends('main')
@section('content')
<div id="property-hero">

    <div class="property-hero-background-image"></div>
    <div id="property-hero-background-image-helper"></div>
    <div id="property-hero-background-text"></div>

</div>

<div id="property-container">
    <div id="property-main">

        <p id="street-address">{{ $property->street_address }}, {{ $property->city }}, {{ $property->zip }}</p>
        <img id="property-main-picture" src="../images/1.jpg">

        <div id="property-slider-container-main">
            <div id="property-arrow-left" class="property-arrow"></div>
            <div id="property-slider">
                <!-- overflow hidden on our above parent -->
                <div id="property-slider-container">
                    <div class="properties properties1" id="lastClone">
                        <div class="properties-content">
                            <img src="../images/7-small.jpg">
                            <img src="../images/8-small.jpg">
                            <img src="../images/9-small.jpg">
                            <img src="../images/8-small.jpg">
                            <img src="../images/7-small.jpg">
                        </div>
                    </div>
                    <div class="properties properties2">
                        <div class="properties-content">
                            <img src="../images/1-small.jpg">
                            <img src="../images/2-small.jpg">
                            <img src="../images/3-small.jpg">
                            <img src="../images/2-small.jpg">
                            <img src="../images/1-small.jpg">
                        </div>
                    </div>
                    <div class="properties properties3">
                        <div class="properties-content">
                            <img src="../images/4-small.jpg">
                            <img src="../images/5-small.jpg">
                            <img src="../images/6-small.jpg">
                            <img src="../images/5-small.jpg">
                            <img src="../images/4-small.jpg">
                        </div>
                    </div>
                    <div class="properties properties4">
                        <div class="properties-content">
                            <img src="../images/7-small.jpg">
                            <img src="../images/8-small.jpg">
                            <img src="../images/9-small.jpg">
                            <img src="../images/8-small.jpg">
                            <img src="../images/7-small.jpg">
                        </div>
                    </div>
                    <div class="properties properties5" id="firstClone">
                        <div class="properties-content">
                            <img src="../images/1-small.jpg">
                            <img src="../images/2-small.jpg">
                            <img src="../images/3-small.jpg">
                            <img src="../images/2-small.jpg">
                            <img src="../images/1-small.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <div id="property-arrow-right" class="property-arrow"></div>
        </div>

        <div id="property-details">
            <h2>Property Details</h2>
            <h3>Description</h3>
            <p id="property-details">
                {{ $property->details }}
            </p>
            <div id="open-house">

            </div>
            <h3>Property Features</h3>
            <div class="details">
                <div class="details-sec">
                    <p><b>Square Feet:</b> {{ $property->square_feet }}</p>
                    <p><b>Lot Size:</b> {{ $property->lot_size }}</p>
                    <p><b>Year Built:</b> {{ $property->year_built }}</p>
                    <p><b>Type:</b> {{ $property->type }}</p>
                    <p><b>Sub Type:</b> {{ $property->sub_type }}</p>
                    <p><b>Listing Status:</b> {{ $property->listing_status }}</p>
                    <p><b>Listing #:</b> {{ $property->listing_number }}</p>
                    <p><b>County:</b> {{ $property->county }}</p>
                    <p><b>Neighborhood:</b> {{ $property->neighborhood }}</p>
                    <p><b>Fire Place:</b> {{ $property->fireplace }}</p>
                    <p><b>Stories:</b> {{ $property->stories }}</p>
                    <p><b>Garage:</b> {{ $property->garage }}</p>
                    <p><b>Parking Space:</b> {{ $property->parking_space }}</p>
                    <p><b>Utilities:</b> {{ $property->utilities }}</p>
                </div>
                <div class="details-sec">

                </div>
            </div>
        </div>
    </div>

    <div id="property-side">
        <div id="property-search-box">
            <h2>Contact Agent</h2>
            <form>
                <input name="name" placeholder="Name">
                <input name="phone" placeholder="Phone">
                <input name="email" placeholder="Email">
            </form>
        </div>
        <div id="property-side-image">
                <img src="../images/woman.jpg">
                <div id="property-side-agent-detail">
                {{ $property->agent->phone_number }}<br>
                {{ $property->agent->email }}
            </div>
        </div>
        
    </div>
</div>

<script>
    function imageGallery() {
        const highlight = document.querySelector("#property-main-picture");
        const previews = document.querySelectorAll('.properties-content img');
        previews.forEach(preview => {
            preview.addEventListener("click", function () {
                const smallSrc = this.src;
                const bigSrc = smallSrc.replace("-small", "");
                console.log(smallSrc);
                highlight.src = bigSrc;
                //previews.forEach(preview => preview.classList.remove('room-active'));
                //preview.classList.add("room-active");
            });
        });
    }

    imageGallery();

    let pSlider = document.querySelector('#property-slider-container'),
        p = document.querySelectorAll('.properties'),
        pArrowLeft = document.querySelector("#property-arrow-left"),
        pArrowRight = document.querySelector("#property-arrow-right");

    var currentProperties = 1;
    pSlider.style.marginLeft = '-100%';

    function pSlideRight() {
        if (currentProperties >= p.length - 1) return;
        currentProperties++;
        pSlider.style.transition = '0.3s ease-in-out';
        pSlider.style.marginLeft = '-100' * currentProperties + '%';
    }

    function pSlideLeft() {
        if (currentProperties <= 0) return;
        currentProperties--;
        pSlider.style.transition = '0.3s ease-in-out';
        pSlider.style.marginLeft = '-100' * currentProperties + '%';
    }

    pArrowRight.addEventListener('click', function () {
        pSlideRight();
    });

    pArrowLeft.addEventListener('click', function () {
        pSlideLeft();
    });

    pSlider.addEventListener('transitionend', function () {
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
