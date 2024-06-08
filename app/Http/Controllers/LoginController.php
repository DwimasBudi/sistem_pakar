<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            // 'title' => 'Login',
            // 'active' => 'Login'
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->level=='admin'){
                return redirect()->intended('/dashboard');
            }
            else{
                return redirect()->intended('/dashboard/diagnosa');
            }
            
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function register(Request $request)
    {
        return view('login.create', [
            // 'title' => 'Login',
            // 'active' => 'Login'
        ]);
    }
    public function signup(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);

        // dd($request->session()->get('errors'));

        $user = User::create([
            'nama' => $validatedData['nama'],
            'level' => 'user',
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Log in the user immediately after registration
        Auth::login($user);

        return redirect('/dashboard/diagnosa');
    }

}
