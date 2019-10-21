@extends('main')

@section('content')
<div class="container header-fix">
    <div class="row">
        <div class="col-md-12">
            <h1>Your Property</h1>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">

            <div class="form-group">
                <label name="street-address">Street Address:</label>
                {{ $property->street_address }}
            </div>
            <div class="form-group">
                <label name="city">City:</label>
                {{ $property->city }}
            </div>
            <div class="form-group">
                <label name="zip">Zip:</label>
                {{ $property->zip }}
            </div>
            <div class="form-group">
                <label name="price">Price:</label>
                {{ $property->price }}
            </div>
            <div class="form-group">
                <label name="bedrooms">Bedrooms:</label>
                {{ $property->bedrooms }}
            </div>
            <div class="form-group">
                <label name="bathrooms">Bathrooms:</label>
                {{ $property->bathrooms }}
            </div>
            <div class="form-group">
                <label name="square-feet">Square Feet:</label>
                {{ $property->square_feet }}
            </div>
            <div class="form-group">
                <label name="lot-size">Lot Size:</label>
                {{ $property->lot_size }}
            </div>
            <div class="form-group">
                <label name="year-built">Year Built:</label>
                {{ $property->year_built }}
            </div>
            <div class="form-group">
                <label name="type">Type:</label>
                {{ $property->type }}
            </div>

            <div class="form-group">
                <label name="sub-type">Sub-Type:</label>
                {{ $property->sub_type }}
            </div>

            <div class="form-group">
                <label name="listing-status">Listing Status:</label>
                {{ $property->listing_status }}
            </div>

            <div class="form-group">
                <label name="listing-number">Listing Number:</label>
                {{ $property->listing_number }}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label name="county">County:</label>
                {{ $property->county }}
            </div>
            <div class="form-group">
                <label name="neighborhood">Neighborhood:</label>
                {{ $property->neighborhood }}
            </div>
            <div class="form-group">
                <label name="fireplace">Fireplace:</label>
                {{ $property->fireplace }}
            </div>
            <div class="form-group">
                <label name="stories">Stories:</label>
                {{ $property->stories }}
            </div>
            <div class="form-group">
                <label name="garage">Garage:</label>
                {{ $property->garage }}
            </div>
            <div class="form-group">
                <label name="parking-space">Parking Space:</label>
                {{ $property->parking_space }}
            </div>
            <div class="form-group">
                <label name="utilities">Utilities:</label>
                {{ $property->utilities }}
            </div>
            <div class="form-group">
                <label name="details">Details:</label>
                {{ $property->details }}
            </div>
            <div class="form-group">

            </div>
        </div>
        <div class="col-md-2">
            <a href="/agents/{{ $property->user_id }}/{{ $property->id }}/edit" class="btn btn-primary">Edit</a>
        </div>
        <div class="col-md-2">
            <form action="/agents/{{ $property->user_id }}/{{ $property->id }}/" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>
    </div>
</div>
@endsection
