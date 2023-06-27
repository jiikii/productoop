<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginAccount(Request $request){

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect('/dashboard/products');
        }

        return back()->with('error', 'Try Username as -admin@gmail.com- and Password as -password- or Relax! and remember it correctly!');

    }
    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}