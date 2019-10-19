@extends('main')

@section('content')
<div class="container header-fix">
    <div class="row">
        <div class="col-md-10">
            <h1>All Properties</h1>
        </div>
        <div class="col-md-2">
            <a href="/properties/create" class="btn btn-lg btn-block btn-primary">Create Property</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Street Address</th>
                    <th>City</th>
                    <th>Zip</th>
                    <th>Price</th>
                </thead>
                <tbody>
                    @foreach($properties as $property)
                    <tr>
                        <th>{{ $property->id }}</th>
                        <td>{{ $property->street_address }}</td>
                        <td>{{ $property->city }}</td>
                        <td>{{ $property->zip }}</td>
                        <td>{{ $property->price }}</td>
                        <td><a href="/properties/{{ $property->id }}" class="btn-sm">View</a><a href="/properties/{{ $property->id }}/edit" class="btn-sm">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
