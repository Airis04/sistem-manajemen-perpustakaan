<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Kelas;
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
            'kelas' => Kelas::latest()->get(),
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

        switch ($request->role) {
            case 'admin':
                if (Auth::guard('admin')->attempt($credentials)) {
                    return redirect()->intended(route('dashboard.index'));
                }
                break;
            case 'anggota':
                if (Auth::guard('anggota')->attempt($credentials)) {
                    return redirect()->intended(route('home'));
                }
                break;
        }

        toast('Email atau password salah', 'error');

        return back();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nis' => 'required|unique:anggota,nis|max:10',
            'nama' => 'required',
            'email' => 'required|email|unique:anggota,email',
            'password' => 'required',
            'no_telpon' => 'required|max:20',
            'alamat' => 'required',
            'id_kelas' => 'required|exists:kelas,id',
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
