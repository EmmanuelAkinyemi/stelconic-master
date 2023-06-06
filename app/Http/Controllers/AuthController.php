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

    // public function changePass()
    // {
    //     return view('admin.change-password');
    // }

    // public function updatePassword(Request $request)
    // {

    //     $formsField = [
    //         'password' => $request->password
    //     ];

    //     $request->update($formsField);
    //     return redirect('/dashboard')->with('info', 'Password Successfully!');

    // }

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
