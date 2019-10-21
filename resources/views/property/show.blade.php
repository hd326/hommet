@extends('main')
@section('content')
<div id="property-hero">

    <div class="property-hero-background-image"></div>
    <div id="property-hero-background-image-helper"></div>
    <div id="property-hero-background-text"></div>

</div>

<div id="property-container">
    <div id="property-main">
        @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>Success</strong> {{ session()->get('message') }}
        </div>
        @endif
        <div id="street-address-favorite">
            <p id="street-address">{{ $property->street_address }}, {{ $property->city }}, {{ $property->zip }}</p>

            @if(Auth::check())
            @if($property->isFavorited)
            <form action="/properties/{{ $property->id }}/favorite" method="POST">
                @csrf
                {{ method_field('delete') }}
                <button type="submit"><i class="fas fa-star fa-2x"></i></button>
            </form>
            @elseif(!$property->isFavorited)
            <form action="/properties/{{ $property->id }}/favorite" method="POST">
                @csrf
                <button type="submit"><i class="far fa-star fa-2x"></i></button>
            </form>
            @endif
            @endif

        </div>
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

        <div id="properties-details">
            <div id="property-heading-showing">
                <h2>Property Details</h2>
                <h2>
                    <!-- Button trigger modal -->

                    <button type="button" class="btn btn-primary custom-btn" data-toggle="modal"
                        data-target="#exampleModal">
                        REQUEST SHOWING
                    </button>

                    <!-- Modal -->
                    <form action="/properties/{property}/schedule-contact" method="POST">
                        @csrf
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Schedule a Showing</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        Re: {{ $property->street_address }}, {{ $property->city }},
                                        {{ $property->zip }}<br /><br />

                                        <input type="hidden" name="agent_email"
                                            value="{{ $property->user->email }}">
                                        <label for="name">Your Name*:</label>
                                        <input name="name" class="form-control"><br>
                                        <label for="phone">Your Phone Number*:</label>
                                        <input name="phone_number" class="form-control"><br>
                                        <label for="email">Your Email*:</label>
                                        <input name="email_address" class="form-control"><br>
                                        <label for="best-time">When is the best time to contact you?*</label>
                                        <input name="best_time_to_contact" class="form-control"><br>
                                        <label for="comments-questions">Comments/Questions - When would you like to see
                                            this property?</label>
                                        <textarea name="comments_questions" class="form-control col=" 50"
                                            row="5"></textarea>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">CANCEL</button>
                                        <button type="submit" class="btn btn-primary">REQUEST</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                </h2>
                </form>
            </div>
            <h3>Description</h3>
            <p id="property-details">
                {{ $property->details }}
            </p>

            <h3>Property Features</h3>
            <div class="details">
                <div class="details-sec">
                    <p><b>Square Feet:</b> {{ number_format($property->square_feet) }}</p>
                    <p><b>Lot Size:</b> {{ number_format($property->lot_size) }}</p>
                    <p><b>Year Built:</b> {{ $property->year_built }}</p>
                    <p><b>Type:</b> {{ $property->type }}</p>
                    <p><b>Sub Type:</b> {{ $property->sub_type }}</p>
                    <p><b>Listing Status:</b> {{ $property->listing_status }}</p>
                    <p><b>Listing #:</b> {{ $property->listing_number }}</p>

                </div>
                <div class="details-sec">
                    <p><b>County:</b> {{ $property->county }}</p>
                    <p><b>Neighborhood:</b> {{ $property->neighborhood }}</p>
                    <p><b>Fire Place:</b> {{ $property->fireplace }}</p>
                    <p><b>Stories:</b> {{ $property->stories }}</p>
                    <p><b>Garage:</b> {{ $property->garage }}</p>
                    <p><b>Parking Space:</b> {{ $property->parking_space }}</p>
                    <p><b>Utilities:</b> {{ $property->utilities }}</p>
                </div>
            </div>
        </div>
    </div>

    <div id="property-side">
        <div id="property-search-box">
            <h2>Contact Agent</h2>
            <form action="/properties/{property}/agent-contact" method="POST">
                @csrf
                <input name="agent_email" type="hidden" value="{{ $property->user->email }}">
                <input name="name" placeholder="Name" value={{ old('name')}}>
                {{ $errors->first('name') }}
                <input name="phone_number" placeholder="Phone" value={{ old('phone')}}>
                {{ $errors->first('phone') }}
                <input name="email_address" placeholder="Email" value={{ old('email')}}>
                {{ $errors->first('email') }}
                <textarea name="message" rows="5">I would like to learn more about this listing.</textarea>
                {{ $errors->first('message') }}
                <button type="submit">Contact Agent</button>

            </form>
        </div>
        <div id="property-side-image">
            <img src="../images/woman.jpg">
            <div id="property-side-agent-detail">
                {{-- {{ $property->agent->phone_number }}<br> --}}
                {{ $property->user->email }}<br>
                {{-- {{ ucfirst($property->agent->broker->name) }} Group --}}

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
