<!-- resources/views/lippies/show.blade.php -->

@extends('layouts.app')

@section('content')
<style>
    /* public/css/show.css */

body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f8ff;
    margin: 0;
}

.container {
    padding: 20px;
}

.card {
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
    background-color: #fff;
}

.card-header {
    background-color: #ff69b4;
    color: #fff;
    font-size: 1.5em;
    text-align: center;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    padding: 10px;
}

.card-body {
    padding: 20px;
}

.card-body p {
    margin-bottom: 10px;
}

.card-footer {
    background-color: #f0f0f0;
    padding: 10px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    text-align: center;
}

.card-footer a {
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.card-footer a:hover {
    background-color: #0056b3;
}

.img-fluid {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    margin-top: 10px;
}

.no-image {
    text-align: center;
    color: #ccc;
    font-style: italic;
}

</style>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{ $lippy->brand }} - {{ $lippy->shade }}</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Type:</strong> {{ $lippy->type }}</p>
                        <p><strong>Price:</strong> ${{ number_format($lippy->price, 2) }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Image:</strong></p>
                        @if ($lippy->img)
                            <img src="{{ asset('storage/' . $lippy->img) }}" alt="{{ $lippy->brand }}" class="img-fluid">
                        @else
                            <p>No Image</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('lippies.index') }}" class="btn btn-primary">Back to Lip List</a>
            </div>
        </div>
    </div>
@endsection
