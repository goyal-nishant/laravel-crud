@extends('layouts.header')

@section('title','Create products')
@section('content')
@if($message = Session::get('success'))
<div class="alert alert-success alert-block">
    {{$message}}
</div>
@endif
<div class="row justify-content-center" >
    <div class="col-sm-8">
        
        <div class="card p-3 mt-3">
            <h3 class="text-muted">Edit Details of {{$product->name}}</h3>
                <form method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group ">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}"/>
                        @if($errors->has('name'))
                        <span class="text-danger">
                            {{$errors->first('name')}}
                        </span>
                        @endif
                    </div>
                    <div class="form-group mt-2">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="4">{{ old('name', $product->description) }}</textarea>
                        @if($errors->has('description'))
                        <span class="text-danger">
                            {{$errors->first('description')}}
                        </span>
                        @endif
                    </div>
                    <button type="submit" class="mt-2 btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection