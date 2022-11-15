<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetail;

class BaseController extends Controller
{
    //
    public function home(){
        $products = Product::get();
        $new_products = Product::limit(6)->latest()->get();
        return view('front.home', compact('products', 'new_products'));
    }
    public function specialOffer(){
        return view('front.specialOffer');
    }
    public function delivery(){
        return view('front.delivery');
    }
    public function contact(){
        return view('front.contact');
    }
    public function cart(){
        return view('front.cart');
    }
    public function productView(){
        return view('front.productView');
    }
}
