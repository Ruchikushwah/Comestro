<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $req)
    {
        if ($req->isMethod("post")) {
            $req->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            $credentials = $req->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('auth.login')->with('success', 'Login Successful');
            }

            return back()->withErrors(['email' => 'Invalid credentials']);
        }

        return view("login");
    }

    public function register(Request $req)
    {
        if ($req->isMethod("post")) {
            $req->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]);

            $user = new User();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = Hash::make($req->password); // Hash password
            $user->save();

            return redirect()->route('auth.login')->with('success', 'Registration Successful');
        }

        return view("register");
    }
}
