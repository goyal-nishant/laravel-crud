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
                <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group ">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}"/>
                        @if($errors->has('name'))
                        <span class="text-danger">
                            {{$errors->first('name')}}
                        </span>
                        @endif
                    </div>
                    <div class="form-group mt-2">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="4">{{ old('name') }}</textarea>
                        @if($errors->has('description'))
                        <span class="text-danger">
                            {{$errors->first('description')}}
                        </span>
                        @endif
                    </div>
                    <div class="form-group mt-2">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" />
                    </div>
                    @if($errors->has('image'))
                        <span class="text-danger">
                            {{$errors->first('image')}}
                        </span>
                        @endif
                        <br>
                    <button type="submit" class="mt-2 btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection