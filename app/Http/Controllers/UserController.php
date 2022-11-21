<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //

    public function index()
    {
        //
        // $categories = Category::where('status','1')->get();
        $users =User::all()->except('role','admin');
        // $users = User::where('role', '!=', 'admin')->get();
        return view('admin.user.index',compact('users'));

    }
    public function delete( Request $request){
        $id= $request->id;
        $user = User::find($id);
        $user->delete();
    }
}
