@extends('main')

@section('title', '| Home Page')

@section('content')
<div id="hero">

    <div class="hero-background-image"></div>
    <div class="hero-background-image"></div>
    <div class="hero-background-image"></div>
    <div id="hero-background-image-helper"></div>
    <div id="hero-background-text">
        <h2>We're passionate about finding you the home of your dreams.</h2>
        <button id="hero-find-your-dream">Find Your Dream Home!</button>
    </div>

    <button class="btn" onClick="slideImage(-1)" id="btn-1">
        <div class="arrow" id="arrow-left">
        </div>
    </button>
    <button class="btn" onClick="slideImage(1)" id="btn-2">
        <div class="arrow" id="arrow-right">
        </div>
    </button>

</div>

<div id="search">
    <div id="search-wrap">
        <i class="fas fa-search"></i>
        <select>
            <option value="" disabled selected hidden>Property Type</option>
        </select>
        <input value="" placeholder="City or ZIP">
        <select>
            <option value="" disabled selected hidden>Bedrooms</option>
        </select>
        <select>
            <option value="" disabled selected hidden>Bathrooms</option>
        </select>
        <select>
            <option value="" disabled selected hidden>Min Price</option>
        </select>
        <select>
            <option value="" disabled selected hidden>Max Price</option>
        </select>
        <button>SEARCH</button>
        <p>Advanced Search</p>
    </div>
</div>

<div id="introduction">
    <div id="introduction-wrap">
        <div class="introduction-sec"></div>
        <div class="introduction-sec">
            <h2><span id="welcome-to">Welcome to</span><br /> Hommet Real Estate</h2><br />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu consequat ligula. Etiam porta, lacus
                sed convallis lobortis, tellus ipsum lacinia libero, vitae porta sapien magna eu odio. Cras vehicula vel
                sapien vitae laoreet. Maecenas luctus nunc at orci consectetur bibendum. Mauris posuere maximus odio, et
                vulputate libero semper quis. Etiam varius eu purus in sagittis. Integer ullamcorper orci sit amet
                posuere hendrerit. Morbi et purus mauris.</p><br />
            <p>Integer nec arcu vehicula eros lobortis lacinia eu et odio. Suspendisse a mi erat. Nunc porta iaculis
                magna, in imperdiet urna pretium et. Aenean ex lorem, tincidunt ut luctus sit amet, vulputate et mi.
                Nullam laoreet magna ac velit pharetra aliquam. Aliquam felis ex, laoreet nec gravida a, scelerisque ut
                diam.</p>
        </div>
    </div>
</div>

<div id="services">
    <div id="services-wrap">
        <div class="service"><button>Find Your Dream Home<i class="fas fa-home"></i></button></div>
        <div class="service"><button>Sell Your Home<i class="fas fa-dollar-sign"></i></button></div>
        <div class="service"><button>What's My Home Worth?<i class="fas fa-search-location"></i></button></div>
        {{-- <div class="service">Search Properties</div>
        <div class="service">Sign Up</div>
        <div class="service">Contact Us</div> --}}
    </div>
</div>

<div id="featured">
    <div id="featured-text">
        <h2>Featured Listings</h2>
    </div>
    <div id="featured-wrap">
        <div class="feature">
            <div class="feature-sec">
                <div class="feature-sec-helper">
                    <p>$500,000</p>
                </div>
            </div>
            <div class="feature-sec">
                <p class="address">1940 S Highway A1a</p>
                <p class="city-state">VERO BEACH, FL</p>
                <p class="details">
                    <span class="details-sec">
                        <i class="fas fa-bed"></i>
                        <span class="bed-detail">12 BD</span>
                    </span>
                    <span class="details-sec">
                        <i class="fas fa-bath"></i>
                        <span class="bath-detail">12 BA</span>
                    </span>
                </p>
            </div>
        </div>

        <div class="feature">
            <div class="feature-sec">
                <div class="feature-sec-helper">
                    <p>$500,000</p>
                </div>
            </div>
            <div class="feature-sec">
                <p class="address">3700 Ocean Drive</p>
                <p class="city-state">VERO BEACH, FL</p>
                <p class="details">
                    <span class="details-sec">
                        <i class="fas fa-bed"></i>
                        <span class="bed-detail">12 BD</span>
                    </span>
                    <span class="details-sec">
                        <i class="fas fa-bath"></i>
                        <span class="bath-detail">12 BA</span>
                    </span>
                </p>
            </div>
        </div>

        <div class="feature">
            <div class="feature-sec">
                <div class="feature-sec-helper">
                    <p>$500,000</p>
                </div>
            </div>
            <div class="feature-sec">
                <p class="address">2150 S Highway A1a</p>
                <p class="city-state">VERO BEACH, FL</p>
                <p class="details">
                    <span class="details-sec">
                        <i class="fas fa-bed"></i>
                        <span class="bed-detail">12 BD</span>
                    </span>
                    <span class="details-sec">
                        <i class="fas fa-bath"></i>
                        <span class="bath-detail">12 BA</span>
                    </span>
                </p>
            </div>
        </div>

        <div class="feature">
            <div class="feature-sec">
                <div class="feature-sec-helper">
                    <p>$500,000</p>
                </div>
            </div>
            <div class="feature-sec">
                <p class="address">0 N. Ocean Drive</p>
                <p class="city-state">VERO BEACH, FL</p>
                <p class="details">
                    <span class="details-sec">
                        <i class="fas fa-bed"></i>
                        <span class="bed-detail">12 BD</span>
                    </span>
                    <span class="details-sec">
                        <i class="fas fa-bath"></i>
                        <span class="bath-detail">12 BA</span>
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>

<div id="contact-us">
    <div id="contact-us-wrap">
        <h2>Contact us for a free consultation. No Obligation. No Catch.</h2>
        <button>Contact Us</button>
    </div>
</div>


<div id="communities">
    <div id="communities-text">
        <h2>Featured Communities</h2>
    </div>
    <div id="communities-wrap">
        <div class="community"><div class="community-helper">Rochester</div></div>
        <div class="community"></div>
        <div class="community"></div>
        <div class="community"></div>
    </div>
</div>

<script src="{{ asset('js/main.js') }}">
</script>
@endsection
