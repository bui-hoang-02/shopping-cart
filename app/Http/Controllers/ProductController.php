<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('formProduct');
    }

    public function store(Request $request){
        $products = new Product();
        $products->fill($request->all());
        $products->save();
        return $products;
    }

    public function list(){
        $products = Product::all();
        return view('listProduct', ['list'=>$products]);
    }
}
