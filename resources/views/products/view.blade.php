@extends('layouts.header')

@section('title', $product->name)

@section('profile')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <div class="text-center mb-3">
                    <img src="{{ asset('products/' . $product->image) }}" width="50" height="50" class="rounded-circle" alt="{{ $product->name }}">
                </div>
                <h1 class="text-center">{{ $product->name }}</h1>
                <p class="text-center">{{ $product->description }}</p>
                <div class="text-center">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
