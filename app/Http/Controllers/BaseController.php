<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\ProductDetail;
use Hash;
use Illuminate\Support\Facades\Auth;

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
    public function productView(Request $request){
        $id= $request->id;
        $product = Product::where('id',$id)->with('ProductDetail')->first();
        $category_id = $product->category_id;
        $related_products = Product::where('category_id',$category_id)->get();
        return view('front.productView', compact('product','related_products'));
    }
    public function user_login(){
        return view('front.login');
    }
    public function loginCheck(Request $request){
        
        $data = array(
            'email' => $request->email,
            'password' => $request->password
        );
        // dd($data);
        if(Auth::attempt($data)){
            return redirect()->route('home');
        }else{
            
            return back()->withErrors(['message' => dd($data)]);
            // return back()->withErrors(['message' => 'Invalid email or password']);
        }
        
        // return view('front.login');
    
    }
    public function user_store(Request $request){
        $data = array(
            'name' => $request->first_name.' '.$request->last_name,
            'email' => $request->register_email,
            'password' => Hash::make($request->register_password),
            'role' => 'user',
        );

        // dd($data);
        $user = User::create($data);
        return redirect()->route('user_login');

    }
    public function logout() {
        Auth::logout();
        return redirect()->route('user_login');
    }
}
