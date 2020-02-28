<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Product;

class UserController extends Controller
{
    public function index()
    {
        $product = Product::where('user_id', Auth::user()->id)->get();
    	return view('/user/index', ['product' => $product]);
    }

    public function update()
    {
    	return view('/user/update');
    }

    public function store(Request $request)
    {
    	User::where('id', Auth::user()->id)->update([
                    'firstname' => $request->input('firstname'),
                    'lastname' => $request->input('lastname'),
                    'numberphone' => $request->input('numberphone'),
                    'email' => $request->input('email'),
                    'address' => $request->input('address'),

                ]);
    	return redirect('/profile');
    }

    public function updateavatar()
    {
        return view('/user/avatar');
    }

}
