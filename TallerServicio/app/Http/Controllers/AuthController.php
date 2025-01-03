<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Mostrar formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('login.login');
    }

    // Procesar inicio de sesión
    public function login(Request $request)
    {
        // Validar los campos
        $credentials = $request->only('username', 'password');
        
        if (Auth::attempt($credentials)) {
            // Redirigir al dashboard si el login es exitoso
            return redirect()->route('dashboard');
        }

        // Si las credenciales son incorrectas, devolver error
        return back()->withErrors(['username' => 'Las credenciales son incorrectas'])->withInput();
    }

    // Mostrar formulario de registro
    public function showRegistrationForm()
    {
        return view('login.register');
    }

    // Procesar registro
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Crear el usuario
        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        // Iniciar sesión inmediatamente después del registro
        Auth::login($user);

        return redirect()->route('dashboard');
    }

    // Cerrar sesión
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}