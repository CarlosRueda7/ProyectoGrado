<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validar datos del formulario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Verificar credenciales
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('index'); // Redirige a la página principal
        }

        return back()->withErrors(['email' => 'Las credenciales son incorrectas.']);
    }

    public function register(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Crear un nuevo usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Encriptar la contraseña
        ]);

        // Autenticar al usuario y redirigirlo
        Auth::login($user);
        return redirect()->route('index'); // Redirige a la página principal después del registro
    }
}
