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
    <form id="search-wrap" action="/search" method="POST">
        {{ csrf_field() }}
        <i class="fas fa-search"></i>
        <input name="search" placeholder="Type a city, neighborhood, zip, address, or listing #">
        <select name="bedrooms">
            <option value="" disabled selected>Bedrooms</option>
            <option type="text" value="1">1 or more</option>
            <option type="text" value="2">2 or more</option>
            <option type="text" value="3">3 or more</option>
            <option type="text" value="4">4 or more</option>
            <option type="text" value="5">5 or more</option>
            <option type="text" value="6">6 or more</option>
        </select>
        <select name="bathrooms">
            <option value="" disabled selected>Bathrooms</option>
            <option type="text" value="1">1 or more</option>
            <option type="text" value="2">2 or more</option>
            <option type="text" value="3">3 or more</option>
            <option type="text" value="4">4 or more</option>
        </select>
        <select name="min">
            <option value="" disabled selected>Min Price</option>
            <option type="text" value="100000">$100,000</option>
            <option type="text" value="200000">$200,000</option>
            <option type="text" value="300000">$300,000</option>
            <option type="text" value="400000">$400,000</option>
            <option type="text" value="500000">$500,000</option>
            <option type="text" value="600000">$600,000</option>
            <option type="text" value="700000">$700,000</option>
            <option type="text" value="800000">$800,000</option>
            <option type="text" value="900000">$900,000</option>
            <option type="text" value="1000000">$1,000,000</option>
        </select>
        <select name="max">
            <option value="" disabled selected>Max Price</option>
            <option type="text" value="100000">$100,000</option>
            <option type="text" value="200000">$200,000</option>
            <option type="text" value="300000">$300,000</option>
            <option type="text" value="400000">$400,000</option>
            <option type="text" value="500000">$500,000</option>
            <option type="text" value="600000">$600,000</option>
            <option type="text" value="700000">$700,000</option>
            <option type="text" value="800000">$800,000</option>
            <option type="text" value="900000">$900,000</option>
            <option type="text" value="1000000">$1,000,000</option>
        </select>
        <button>SEARCH</button>
        <p>Advanced Search</p>
    </form>
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
        @foreach($featuredProperties as $featuredProperty)
        <a href="/properties/{{ $featuredProperty->id }}">
        <div class="feature">
            <div class="feature-sec">
                <div class="feature-sec-helper">
                    <p>${{ number_format($featuredProperty->price) }}</p>
                </div>
            </div>
            <div class="feature-sec">
                <p class="address">{{ $featuredProperty->street_address }}</p>
                <p class="city-state">{{ $featuredProperty->city}}, {{ $featuredProperty->zip }}</p>
                <p class="details">
                    <span class="details-sec">
                        <i class="fas fa-bed"></i>
                        <span class="bed-detail">{{ $featuredProperty->bedrooms }} BR</span>
                    </span>
                    <span class="details-sec">
                        <i class="fas fa-bath"></i>
                        <span class="bath-detail">{{ $featuredProperty->bathrooms }} BA</span>
                    </span>
                </p>
            </div>
        </div>
    </a>
        @endforeach
        {{-- <div class="feature">
            <div class="feature-sec">
                <div class="feature-sec-helper">
                    <p>$500,000</p>
                </div>
            </div>
            <div class="feature-sec">
                <p class="address">9126 Brienne Way</p>
                <p class="city-state">Elk Grove, CA 95758</p>
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
                <p class="address">9743 White Pine Way</p>
                <p class="city-state">Elk Grove, CA 95624</p>
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
                <p class="address">8818 Kepler Ct</p>
                <p class="city-state">Elk Grove, CA 95758</p>
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
        </div> --}}
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
    <form id="communities-wrap" action="/community" method="POST">
        {{-- <div class="community">
            <div class="community-helper">Elk Grove</div>
        </div>
        <div class="community">
            <div class="community-helper">Roseville</div>
        </div>
        <div class="community">
            <div class="community-helper">Rocklin</div>
        </div>
        <div class="community">
            <div class="community-helper">Citrus Heights</div>
        </div> --}}
        @foreach ($featuredCommunities as $featuredCommunity)
        <a href="/community/{{ $featuredCommunity->id }}">
            <div class="community">
                <div class="community-helper">{{ $featuredCommunity->name }}</div>

            </div>
        </a>
        @endforeach
    </form>
</div>

<div id="testimonials">
    <div id="testimonials-text">
        <h2>Testimonials</h2>
    </div>
    <div id="testimonial-container">
        <!-- our testimonial container to hold everything together -->
        <div id="testimonial-arrow-left" class="testimonial-arrow"></div>
        <div id="testimonial-slider">
            <!-- overflow hidden parent on our above parent -->
            <div id="testimonial-slider-container">
                <!-- our child which is 500% to accomodate sliders -->
                <div class="testimonial slide1" id="lastClone">
                    <div class="slide_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras efficitur
                        purus nec arcu sodales tristique. Maecenas dictum luctus faucibus. Donec non sapien efficitur,
                        euismod risus sit amet, feugiat metus. Suspendisse rutrum sodales sem, a tempor augue
                        consectetur vitae. Duis fringilla lobortis augue sed vestibulum. Aliquam erat volutpat. </div>
                </div>

                <div class="testimonial slide2">
                    <div class="slide_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras efficitur
                        purus nec arcu sodales tristique. Maecenas dictum luctus faucibus. Donec non sapien efficitur,
                        euismod risus sit amet, feugiat metus. Suspendisse rutrum sodales sem, a tempor augue
                        consectetur vitae. Duis fringilla lobortis augue sed vestibulum. Aliquam erat volutpat. </div>
                </div>

                <div class="testimonial slide3">
                    <div class="slide_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras efficitur
                        purus nec arcu sodales tristique. Maecenas dictum luctus faucibus. Donec non sapien efficitur,
                        euismod risus sit amet, feugiat metus. Suspendisse rutrum sodales sem, a tempor augue
                        consectetur vitae. Duis fringilla lobortis augue sed vestibulum. Aliquam erat volutpat. </div>
                </div>

                <div class="testimonial slide4">
                    <div class="slide_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras efficitur
                        purus nec arcu sodales tristique. Maecenas dictum luctus faucibus. Donec non sapien efficitur,
                        euismod risus sit amet, feugiat metus. Suspendisse rutrum sodales sem, a tempor augue
                        consectetur vitae. Duis fringilla lobortis augue sed vestibulum. Aliquam erat volutpat. </div>
                </div>

                <div class="testimonial slide5" id="firstClone">
                    <div class="slide_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras efficitur
                        purus nec arcu sodales tristique. Maecenas dictum luctus faucibus. Donec non sapien efficitur,
                        euismod risus sit amet, feugiat metus. Suspendisse rutrum sodales sem, a tempor augue
                        consectetur vitae. Duis fringilla lobortis augue sed vestibulum. Aliquam erat volutpat. </div>
                </div>
            </div>
        </div>
        <div id="testimonial-arrow-right" class="testimonial-arrow"></div>
    </div>
</div>

<div id="more">
    <div id="more-sec-wrap">
        <div class="more-sec">
            <div class="more-sec-title">
                <h3>Latest Posts <i class="fas fa-book-open"></i></h3>
            </div>
            <div class="more-sec-sections-wrap">
                <div class="more-sec-sections">
                    <div class="picture"></div>
                    <div class="post">
                        <h4>SIGNS THAT NOW IS THE TIME TO SELL YOUR HOME</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lorem lacus, iaculis in
                            fringilla a, dignissim ut quam. Quisque elementum libero non aliquam porta.</p>
                        <a>Read More &#187;</a>
                    </div>
                </div>
                <div class="more-sec-sections">
                    <div class="picture"></div>
                    <div class="post">
                        <h4>SIGNS THAT NOW IS THE TIME TO SELL YOUR HOME</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lorem lacus, iaculis in
                            fringilla a, dignissim ut quam. Quisque elementum libero non aliquam porta. </p>
                        <a>Read More &#187;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-sec">
            <div class="more-sec-title">
                <h3>Areas of Expertise<i class="fas fa-map-marked-alt"></i></h3>
            </div>
            <div class="more-sec-sections-wrap">
                <div class="more-sec-sections">
                    <ul>
                        <li>Citrus Heights</li>
                        <li>Elk Grove</li>
                        <li>Folsom</li>
                        <li>Galt</li>
                        <li>Isleton</li>
                    </ul>
                </div>
                <div class="more-sec-sections">
                    <ul>
                        <li>Rancho Cordova</li>
                        <li>Placerville</li>
                        <li>Natomas</li>
                        <li>Rocklin</li>
                        <li>Gold River</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('js/main.js') }}">
</script>
@endsection
