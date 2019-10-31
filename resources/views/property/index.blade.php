@extends('main')

@section('content')
<div id="properties-hero">

    <div class="properties-hero-background-image"></div>
    <div id="properties-hero-background-image-helper"></div>
    <div id="properties-hero-background-text"></div>

</div>

<div id="properties-container">
    <div id="properties-main">
        <div id="properties-query">
        <h2>Properties</h2>
        <form action="/properties">
            <select name="queryOptions">
                <option>Price Ascending</option>
                <option>Price Descending</option>
                <option>Most Recent</option>
                <option>A-Z</option>
                <option>Z-A</option>
            </select>
            <button type="submit">Submit</button>
        </form>
        </div>
        @foreach($properties as $property)
        <div class="properties-card">
            <a href="/properties/{{ $property->id }}/">
            <div class="properties-img"><img src="../images/1.jpg"></div>
            <div class="properties-details">
                <div class="street-address-price">
                        <h3>{{ $property->city }}</h3>
                        <h3>${{ number_format($property->price) }}</h3>
                </div>
                
                <hr>
                <p><i class="fas fa-bed"></i> {{ $property->bedrooms }} <i class="fas fa-bath"></i> {{ $property->bathrooms }} </p>
                <hr>
                <p>Lorem ipsum</p>
                <a id="details-button" href="">DETAILS</a>
            </div>
        </a>
        </div>
        <hr>
        @endforeach

        {{ $properties->appends(['queryOptions' => $query ])->links() }}
        

    </div>


    <div id="properties-side">
        <div id="properties-search-box">
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
        <div id="properties-side-image">
            <img src="../images/woman.jpg">
            <div id="properties-side-agent-detail">
                {{-- {{ $property->agent->phone_number }}<br> --}}
                {{ $property->user->email }}<br>
                {{-- {{ ucfirst($property->agent->broker->name) }} Group --}}

            </div>
        </div>

    </div>
</div>


@endsection
