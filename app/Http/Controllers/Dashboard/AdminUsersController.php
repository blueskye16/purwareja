<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Hashids\Hashids;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('dashboard.users.index', [
            'users' => $users,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required'],
            'retype-password' => ['required'],
            'is_admin' => ['required']
        ]);

        if ($validatedData['retype-password'] !== $validatedData['password']) {
            return redirect()->back()->withErrors(['retype-password' => 'Passwords do not match!']);
        }

        User::create($validatedData);

        return redirect('/dashboard/users')->with('success', 'New user has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $isAdminPreviousSelection = auth()->user()->is_admin;
        return view('dashboard.users.edit', [
            'user' => $user,
            'selectedRole' => $isAdminPreviousSelection
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        dd($request);
        $rules = [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['min:5', 'max:255'],
            // 'retype-password' => ['same:password'],
            'is_admin' => ['required', 'in:0,1']
        ];

        $validatedData = $request->validate($rules);
        // $validatedData['user_id'] = auth()->user()->id;


        User::where('id', $user->id)->update($validatedData);

        return redirect('/dashboard/users')->with('success', 'Admin has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('dashboard/users')->with('success', 'Admin has been deleted!');
    }

}
