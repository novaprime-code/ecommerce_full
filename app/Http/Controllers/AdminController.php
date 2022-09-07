<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;

class AdminController extends Controller
{
    //
    public function login(){
        // echo Hash::make('user123');
        // exit();
        // echo "Welcome";
        return view('admin.login');
    }
    
   
    public function makeLogin(Request $request){
        // return view('admin.login');
        $data = array(
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'admin',
        );
        if(Auth::attempt($data)){
            // echo "Login successful";
            return redirect()->route('admin.dashboard');
        }else{
            return back()->withErrors(['message'=>'Invalid email or password']);
        }


    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
    


}
