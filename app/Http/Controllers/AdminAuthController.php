<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:admins,email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'name' => ['required'],
        ]);

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Menggunakan Hash::make() untuk meng-hash password
        ]);

        if ($admin) {
            return redirect()->route('admin.login');
        }
    }

        public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = Admin::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            if (Auth::guard('admin')->attempt($credentials)) {
                return redirect()->route('bookings.index');
            }
        }

        return redirect()->route('admin.login')->with('error', 'Email atau password salah');
    }

}