<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function LoginShow(): View {

        return view('Members.Auth.login');
    }

    public function RegisterShow(): View {

        return view('Members.Auth.register');
    }

    public function AdminLoginShow(): View {

        return view('Members.Auth.adminlogin');
    }
    

    public function studentLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('web')->attempt($credentials)) { // 👈 Guard 'web' para estudiantes
            return redirect()->route('Members.dash');
        }

        return back()->withErrors(['email' => 'Credenciales incorrectas']);
    }

    public function adminLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) { // 👈 Guard 'admin' para admins
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Credenciales incorrectas']);
    }
}
