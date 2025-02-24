@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Details</h1>

        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{ $product->name }}</h3>
                <p class="card-text"><strong>Details:</strong> {{ $product->detail }}</p>
            </div>
        </div>

        <a href="{{ route('product.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
@endsection
