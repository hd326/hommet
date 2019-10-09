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
<script src="{{ asset('js/main.js') }}"></script>
@endsection
