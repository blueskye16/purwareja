<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            'name' => ['required', 'min:1'],
            'email' => ['required', 'email', 'unique:admins'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);


        // register user baru
        // dd('regis aman');

        Admin::create($validatedData);

        return redirect('/admin')->with('success', 'Login Sukses!');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        //  && Hash::check($request->password, $credentials['password'])

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/admin-dashboard');
        }

        // dd([$credentials, Auth::attempt($credentials)]);
        // dd(Auth::attempt($credentials));
        // var_dump(Auth::attempt($credentials));
        // var_dump($credentials);
        dd(session()->all());

        return back()->with('loginError', 'Login gagal');





        // $credentials = Admin::where('email', '=', $request->email)->first();
        
        // if ($credentials && Hash::check($request->password, $credentials->password)) {
        //     // return "sukses";
        //     $request->session()->regenerate();
        //     // dd(Auth::attempt($credentials));

        //     return redirect()->intended('/admin-dashboard');
        // } else {
        // //     // return "error";
        //     return back()->with('loginError', 'Login gagal');

        // }
    }
}
