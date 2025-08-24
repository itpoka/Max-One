<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //

    public function login(){

        return view('backend.pages.login');
    }

    public function login_process(Request $request)
    {

        //dd($request->all());
       $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    $admin = \App\Models\Admin::where('username', $request->username)->first();

    if ($admin) {

     //dd($admin);
        // ✅ If bcrypt hash
        if (\Hash::check($request->password, $admin->password)) {
            Auth::guard('admin')->login($admin, $request->filled('remember'));
            $request->session()->regenerate();
            return redirect()->route('backend.dashboard')->with('success', 'Welcome back!');
        }

        // // ✅ If MD5 hash
        // if ($admin->password === md5($request->password)) {
        //     // Optional: Rehash to bcrypt for future logins
        //     $admin->password = \Has::make($request->password);
        //     $admin->save();

        //     Auth::guard('admin')->login($admin, $request->filled('remember'));
        //     $request->session()->regenerate();
        //     return redirect()->route('backend.dashboard')->with('success', 'Welcome back!');
        // }
    }

    return back()->withErrors([
        'username' => 'Invalid username or password.',
    ])->onlyInput('username');


    }


    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('backend.login');
    }
}
