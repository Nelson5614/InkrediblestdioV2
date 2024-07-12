<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){

        $products = Product::inRandomOrder()->get();
        return view('shop')->with('products', $products);
    }

    public function show($slug){
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('productdetails')->with('product', $product);
    }
}
