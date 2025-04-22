<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function LoginShow(): View {

        return view('Members.Auth.login');
    }

    public function RegisterShow(): View {

        return view('Members.Auth.register');
    }
    public function studentRegister(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        // Crear el nuevo usuario
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Autenticar al usuario después del registro
        Auth::guard('web')->attempt($student);

        // Redireccionar al dashboard o página de inicio
        return redirect()->route('Members.dash'); // Asegúrate de tener esta ruta definida
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
    
        if (auth('web')->attempt($credentials)) { // Usamos 'web' que está configurado con provider 'students'
            $request->session()->regenerate();
            return redirect()->route('Members.dash');
        }
    
        return back()->withErrors([
            'email' => 'Credenciales incorrectas',
        ])->onlyInput('email');
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
