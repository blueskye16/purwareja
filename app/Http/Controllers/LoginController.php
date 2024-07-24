<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);


        // register user baru
        // dd($validatedData);

        User::create($validatedData);

        return redirect('/admin')->with('success', 'Login Sukses!');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        // dd($credentials);

        if(Auth::attempt($credentials)) 
        {
            $request->session()->regenerate();
            return redirect()->intended('/admin-dashboard');
        }


        return back()->with('loginError', 'Login failed!');

        /* saat auth::attemp, password dari database di decrypt , jadi kalau yang di dadtabse belum ter encrypt bisa ditambahkan dulu sebelum validate di regis controller enkripsi passwordnya, contoh $request['password'] = bcrypt($request['password']); */
    }

}
