<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function showRegister(){
        return view('Auth.Register');
    }
    public function showLogin(){
        return view('Auth.Login');
    }
    public function Register(Request $request){
        $validate = $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email|unique:users,email',
            'Password' => 'required|string|min:8|same:CPassword',
            'CPassword' => 'required|string|min:8',
        ]);

        // Create user with correct field names and hash password
        $User = User::create([
            'name' => $validate['Name'],
            'email' => $validate['Email'],
            'password' => $validate['Password'], // Will be hashed by model
        ]);

        Auth::login($User);
        return redirect('/Tasks')->with('success', 'Registration successful!');
    }
    public function Login(Request $request){
        $credentials = $request->validate([
            'Email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt login using email and password
        if (Auth::attempt(['email' => $credentials['Email'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect('/Tasks')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors([
            'Email' => 'The provided credentials do not match our records.',
        ])->onlyInput('Email');
    }
}
