<?php

namespace App\Http\Controllers;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:pengguna,email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'name' => ['required'],
        ]);

        $pengguna = Pengguna::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($pengguna) {
            return redirect()->route('login');
        }
    }

     public function showLoginForm() {
        return view('rental.login');
    }

    public function login(Request $request)
    {
        $role = $request->role;
    
        if ($role === 'admin') {
            $credentials = $request->only('email', 'password');
            
            if (Auth::guard('admin')->attempt($credentials)) {
                return redirect()->route('bookings.index');
            }
    
            return redirect()->route('login')->with('error', 'Invalid credentials for admin.');
        } elseif ($role === 'user') {
            $credentials = $request->only('email', 'password');
    
            if (Auth::attempt($credentials)) {
                return redirect()->route('home');
            }
    
            return redirect()->route('login')->with('error', 'Invalid credentials for user.');
        }
    
        return redirect()->route('login')->with('error', 'Please select a role to login.');
    }    

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}