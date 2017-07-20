<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }


    public function attempt(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', 'min:6', 'max:255'],
        ]);

        $credentials = $request->only(['email', 'password']);
        $remember = $request->has('remember');

        if (!Auth::attempt($credentials, $remember)){
            return redirect()->back()->with('fail', 'These Credentials does not match')
                ->withInput();
        }

        return redirect('dashboard');
    }

    public function register(){
        return view('auth.register');
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'max:255', 'confirmed'],
        ]);

        $credentials = array_merge($request->all(), [
            'password' => bcrypt($request->input('password')),
        ]);

        User::create($credentials);

        return redirect('auth/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
