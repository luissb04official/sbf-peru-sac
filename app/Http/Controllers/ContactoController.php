<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactoController extends Controller
{
    // Solo guardar el mensaje en la base de datos
    public function enviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'ruc' => 'required|string|max:11',
            'telefono' => 'required|string|max:20',
            'mensaje' => 'required|string',
            'cf-turnstile-response' => 'required',
        ]);

        $turnstileResponse = $request->input('cf-turnstile-response');
        $secretKey = env('TURNSTILE_SECRET_KEY', '1x0000000000000000000000000000000AA');
        $result = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
            'secret' => $secretKey,
            'response' => $turnstileResponse,
            'remoteip' => $request->ip(),
        ])->json();

        if (!($result['success'] ?? false)) {
            return response()->json(['success' => false, 'message' => 'Verificación fallida'], 400);
        }

        Contacto::create($request->only('nombre','email','ruc','telefono','mensaje'));

        return response()->json(['success' => true, 'message' => 'Mensaje guardado correctamente']);
    }
}
