<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.pages.login', [
            'title' => 'Login',
        ]);
    }

    public function register()
    {
        return view('auth.pages.register', [
            'title' => 'Register',
        ]);
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:anggota,admin',
        ]);
        $credentials = $request->only('email', 'password');

        if ($request->role == 'admin') {
            if (Auth::guard('admin')->attempt($credentials)) {
                return redirect()->intended(route('dashboard.index'));
            }
        } else {
            if (Auth::guard('anggota')->attempt($credentials)) {
                return redirect()->intended(route('home'));
            }
        }

        toast('Email atau password salah', 'error');

        return back();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nis' => 'required|unique:anggotas,nis|max:10',
            'nama' => 'required',
            'email' => 'required|email|unique:anggotas,email',
            'password' => 'required',
            'no_telpon' => 'required|max:20',
            'alamat' => 'required',
        ]);

        Anggota::create($data);

        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        Auth::guard('anggota')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
