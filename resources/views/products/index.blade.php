@extends('layouts.header')

@section('title', 'Products')

@section('btn')
    <a href="products/create" class="btn btn-dark mt-2">New Product</a>
@endsection
@section('table')
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Sno.</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $item)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$item->name}}</td>
            <td><img src="{{ asset('products/' . $item->image) }}" class="rounded-circle" width="50" height="50" alt="Product Image"></td>
            <td >
                <a href="products/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                <a href="products/{{$item->id}}/delete" class="btn btn-danger">Delete</a>
                <a href="products/{{$item->id}}/view" class="btn btn-success">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
