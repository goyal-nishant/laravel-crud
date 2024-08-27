<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index() {
        return view('products.index',['products'=>Product::get()]);
    }
    public function create() {
        return view('products.create');
    }
    public function store(Request $request) {
    $request->validate([
        'name' =>  'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
    ]);

    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('products'), $imageName);

    $product = new product();
    $product->name = $request->name;
    $product->description = $request->description;
    $product->image = $imageName;

    $product->save();
        return back()->withSuccess('Registration succesfull');
    }
    public function edit($id) {
        $product = Product::where('id',$id)->first();
        return view('products.edit',['product' => $product]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'name' =>  'required',
            'description' => 'required',
        ]);
        
        $product = Product::where('id',$id)->first();
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
            return back()->withSuccess('Update succesfull');
    }
    public function view($id) {
        $product = Product::where('id',$id)->first();
        return view('products.view',['product' => $product]);
    }
    public function delete($id) {
        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Deleted succesfull');
    }
}
