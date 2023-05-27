<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register() {
        return view('auth.register');
    }

    public function registerUser(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->usertype = $request->usertype;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Registration successfully done');
    }

    public function login() {
        return view('auth.login');
    }

    public function loginUser(Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
         if (Auth::attempt($credentials)) {
            return redirect('/dashboard')->with('success', 'successfully logged in');
         }

         return back()->with('error', 'invalid credentials');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
