<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
public function store(Request $request)
{
    $request->merge(['correo' => trim($request->correo)]);

    $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'correo' => 'required|email:rfc,dns|regex:/^[^\s@]+@gmail\.com$/i|unique:contactos,correo',
        'telefono' => 'required|digits:9|unique:contactos,telefono',
        'mensaje' => 'nullable|string',
    ], [
        'correo.unique' => '❌ Este correo ya ha sido registrado',
        'telefono.unique' => '❌ Este teléfono ya ha sido registrado',
        'correo.regex' => '❌ El correo debe ser un Gmail válido (ejemplo@gmail.com)',
        'telefono.digits' => '❌ El teléfono debe contener exactamente 9 números',
    ]);

    Contacto::create($request->all());

    return back()->with('success', '✅ Tu mensaje fue enviado con éxito.')->withFragment('redes');
}

}
