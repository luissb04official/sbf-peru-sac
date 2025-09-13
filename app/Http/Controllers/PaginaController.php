<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use Barryvdh\DomPDF\Facade\Pdf;


class PaginaController extends Controller
{
    // Mostrar el formulario
    public function consultar()
    {
        return view('consultar');
    }

    // Guardar una factura en la base de datos
    public function guardarFactura(Request $request)
    {
        // Validar los datos
        $request->validate([
            'ruc' => 'required|numeric',
            'fecha' => 'required|date',
            'tipo' => 'required|string',
            'serie' => 'required|string',
            'correlativo' => 'required|integer',
        ]);

        // Insertar en la base de datos
        $factura = Factura::create([
            'ruc' => $request->ruc,
            'fecha' => $request->fecha,
            'tipo' => $request->tipo,
            'serie' => $request->serie,
            'correlativo' => $request->correlativo,
        ]);

        // Redirigir y mostrar los datos de la factura registrada
        return redirect()->back()->with('factura', $factura);
    }

    // Método para descargar el PDF de la factura
    public function descargar($id)
    {
        // Buscar la factura por su ID
        $factura = Factura::findOrFail($id);

        // Generar el PDF
        $pdf = PDF::loadView('facturas.pdf', compact('factura'));

        // Descargar el archivo PDF
        return $pdf->download('factura_' . $factura->id . '.pdf');
    }
}