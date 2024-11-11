@extends('layouts.frontend')

@section('title', '404 Not Found')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>404 Not Found</h1>
            <p>Sorry, but the page you are looking for could not be found.</p>
            <a href="{{ url('/') }}" class="add-button">Back to Home</a>
        </div>
    </div>
</div>
@endsection
