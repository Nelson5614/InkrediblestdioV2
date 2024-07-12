<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        
        $products = Product::inRandomOrder()->take(3)->get();
        $testimonials = Testimonial::inRandomOrder()->get();
        return view('index')->with([
            'products'=> $products,
            'testimonials'=>$testimonials
        ]);
        
    }
  
    public function blog(){

        return view('blog');
    }
    public function about(){

        return view('about');
    }
    public function shop(){

        return view('shop');
    }
  
    public function services(){

        return view('services');
    }
    public function contact(){

        return view('contact');
    }
    public function cart(){

        return view('cart');
    }
    public function checkout(){

        return view('checkout');
    }
}
