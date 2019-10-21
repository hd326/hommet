@extends('main')

@section('content')

<div class="container header-fix">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Property</h1>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <form action="/agents/{{ $property->user_id }}/{{ $property->id }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">

                <div class="form-group">
                    <label name="street-address">Street Address:</label>
                    <input name="street_address" class="form-control" value="{{ $property->street_address }}">
                </div>
                <div class="form-group">
                    <label name="city">City:</label>
                    <input name="city" class="form-control" value="{{ $property->city }}">
                </div>
                <div class="form-group">
                    <label name="zip">Zip:</label>
                    <input name="zip" class="form-control" value="{{ $property->zip }}">
                </div>
                <div class="form-group">
                    <label name="price">Price:</label>
                    <input name="price" class="form-control" value="{{ $property->price }}">
                </div>
                <div class="form-group">
                    <label name="bedrooms">Bedrooms:</label>
                    <input name="bedrooms" class="form-control" value="{{ $property->bedrooms }}">
                </div>
                <div class="form-group">
                    <label name="bathrooms">Bathrooms:</label>
                    <input name="bathrooms" class="form-control" value="{{ $property->bathrooms }}">
                </div>
                <div class="form-group">
                    <label name="square-feet">Square Feet:</label>
                    <input name="square_feet" class="form-control" value="{{ $property->square_feet }}">
                </div>
                <div class="form-group">
                    <label name="lot-size">Lot Size:</label>
                    <input name="lot_size" class="form-control" value="{{ $property->lot_size }}">
                </div>
                <div class="form-group">
                    <label name="year-built">Year Built:</label>
                    <input name="year_built" class="form-control" value="{{ $property->year_built }}">
                </div>
                <div class="form-group">
                    <label name="type">Type:</label>
                    <input name="type" class="form-control" value="{{ $property->type }}">
                </div>
            
                <div class="form-group">
                    <label name="sub-type">Sub-Type:</label>
                    <input name="sub_type" class="form-control" value="{{ $property->sub_type }}">
                </div>
            
                <div class="form-group">
                    <label name="listing-status">Listing Status:</label>
                    <input name="listing_status" class="form-control" value="{{ $property->listing_status }}">
                </div>
            
                <div class="form-group">
                    <label name="listing-number">Listing Number:</label>
                    <input name="listing_number" class="form-control" value="{{ $property->listing_number }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label name="county">County:</label>
                    <input name="county" class="form-control" value="{{ $property->county }}">
                </div>
                <div class="form-group">
                    <label name="neighborhood">Neighborhood:</label>
                    <input name="neighborhood" class="form-control" value="{{ $property->neighborhood }}">
                </div>
                <div class="form-group">
                    <label name="fireplace">Fireplace:</label>
                    <input name="fireplace" class="form-control" value="{{ $property->fireplace }}">
                </div>
                <div class="form-group">
                    <label name="stories">Stories:</label>
                    <input name="stories" class="form-control" value="{{ $property->stories }}">
                </div>
                <div class="form-group">
                    <label name="garage">Garage:</label>
                    <input name="garage" class="form-control" value="{{ $property->garage }}">
                </div>
                <div class="form-group">
                    <label name="parking-space">Parking Space:</label>
                    <input name="parking_space" class="form-control" value="{{ $property->parking_space }}">
                </div>
                <div class="form-group">
                    <label name="utilities">Utilities:</label>
                    <textarea name="utilities" class="form-control" rows="3">{{ $property->utilities }}</textarea>
                </div>
                <div class="form-group">
                    <label name="details">Details:</label>
                    <textarea name="details" class="form-control" rows="10">{{ $property->details }}</textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Update">
                </div>
            </div>
 
        </div>
    </form>
</div>


@endsection
