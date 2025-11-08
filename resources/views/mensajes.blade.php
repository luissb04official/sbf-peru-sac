<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes de Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .mensaje-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .mensaje-header {
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📧 Mensajes de Contacto</h1>
        
        <a href="{{ url('/dashboard') }}" class="btn btn-secondary mb-3">← Volver al Dashboard</a>

        @if($contactos->isEmpty())
            <div class="alert alert-info">
                No hay mensajes registrados.
            </div>
        @else
            @foreach($contactos as $contacto)
                <div class="mensaje-card">
                    <div class="mensaje-header">
                        <h5>{{ $contacto->nombre }}</h5>
                        <small class="text-muted">{{ $contacto->created_at->format('d/m/Y H:i:s') }}</small>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Email:</strong> {{ $contacto->email }}</p>
                            <p><strong>RUC:</strong> {{ $contacto->ruc }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Teléfono:</strong> {{ $contacto->telefono }}</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <strong>Mensaje:</strong>
                        <p class="mt-2">{{ $contacto->mensaje }}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
