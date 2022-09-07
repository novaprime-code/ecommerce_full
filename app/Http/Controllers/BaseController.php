<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    public function home(){
        return view('front.home');
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
