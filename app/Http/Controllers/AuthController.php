<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Team;
use App\Models\Blog;
use App\Models\Property;
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
        $user->username = $request->username;
        $user->usertype = $request->usertype;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('/dashboard')->with('success', 'Registration successfully done');
    }

    public function login() {
        return view('auth.login');
    }

    public function loginUser(Request $request) {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];
         if (Auth::attempt($credentials)) {
            return redirect('/dashboard')->with('success', 'successfully logged in');
         }

         return back()->with('error', 'invalid credentials');
    }

    public function dashboard()
    {

        $blogs = Blog::all();
        $properties = Property::all();
        $teams = Team::all();
        return view('admin.dashboard', compact('blogs','properties', 'teams'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }


}
