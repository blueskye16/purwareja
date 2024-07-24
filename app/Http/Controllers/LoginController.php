<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function store(Request $request)
    {
        // $request['password'] = bcrypt($request['password']);

        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email:dns', 'unique:admins'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);


        // register user baru
        // dd($validatedData);

        Admin::create($validatedData);

        return redirect('/admin')->with('success', 'Login Sukses!');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required','email:dns'],
            'password' => ['required']
        ]);

        // dd($credentials);

        if(Auth::guard('admin')->attempt($credentials)) 
        {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        // dd($credentials);
        return back()->with('loginError', 'Login failed!');
    }

}
