<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() 
    {
        return view('login.login');
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:admins',
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);


        // register user baru
        // dd('regis aman');

        // User::create($validatedData);

        return redirect('/admin')->with('success', 'Login Sukses!');
    }
}
