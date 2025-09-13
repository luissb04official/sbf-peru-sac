<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'usuario' => 'required|string',
            'password' => 'required|string',
        ], [
            'usuario.required' => 'El campo usuario es obligatorio',
            'password.required' => 'El campo contraseña es obligatorio',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('show_register_modal', true);
        }

        $credentials = [
            'password' => $request->password
        ];

        if (filter_var($request->usuario, FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $request->usuario;
        } else {
            $credentials['name'] = $request->usuario;
        }

        if (Auth::attempt($credentials, $request->has('recordar'))) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'usuario' => 'Correo y/o Contraseña incorrectos',
        ])->withInput();
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'usuario' => 'required|string|max:255|unique:users,name',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|string|same:password',
        ], [
            'name.required' => 'El nombre completo es obligatorio',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'Debe ingresar un correo electrónico válido en formato usuario@dominio.com',
            'email.unique' => 'Este correo electrónico ya está registrado',
            'usuario.required' => 'El usuario es obligatorio',
            'usuario.unique' => 'Este nombre de usuario ya está en uso',
            'password.required' => 'La contraseña es obligatoria',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres',
            'password_confirmation.required' => 'Debe confirmar la contraseña',
            'password_confirmation.same' => 'Las contraseñas no coinciden',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            $user = User::create([
                'name' => $request->usuario,
                'nombre' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);

            return redirect('/inicio')->with('success', '¡Cuenta creada exitosamente!');

        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Ocurrió un error al crear la cuenta. Inténtalo nuevamente.'])->withInput()->with('show_register_modal', true);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function recuperarPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email'
        ], [
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'Debe ingresar un correo electrónico válido en formato usuario@dominio.com',
            'email.exists' => 'No encontramos una cuenta con este correo electrónico',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        return back()->with('success', 'Se ha enviado un enlace de recuperación a tu correo electrónico.');
    }
}
