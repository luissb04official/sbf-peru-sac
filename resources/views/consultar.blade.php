<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Facturas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('img/logoo.png') }}">
    <script src="https://kit.fontawesome.com/4e5f0e3e64.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-image: url('{{ asset("img/fondo.png") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .card-custom {
            background: #f1f1f1;
            border-radius: 30px;
            padding: 20px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.15);
            max-width: 650px;
            margin: 30px auto;
            border: 6px solid #d0d0d0;
        }

        .btn-custom {
            background: #f55f5f;
            color: white;
            font-size: 1.3rem;
            padding: 15px 10px;
            border-radius: 10px;
            width: 60%;
        }

        .btn-custom:hover {
            background: #e14a4a;
        }

        .btn-cancel {
            background: #6c757d;
            color: white;
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .btn-cancel:hover {
            background: #5a6268;
        }

        .factura-card {
            margin-top: 20px;
            padding: 20px;
            border-radius: 15px;
            background: #ffffff;
            border: 2px solid #ddd;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .factura-card h5 {
            color: #f55f5f;
            margin-bottom: 10px;
        }

        .factura-card p {
            margin: 5px 0;
            font-size: 1rem;
        }

        .factura-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .factura-header img {
            max-width: 80px;
        }

        .factura-info p {
            margin: 5px 0;
            font-size: 1rem;
        }

        .footer-colors-vertical {
            margin-top: 20px;
        }

        .color-bar {
            height: 28px;
        }
    </style>

</head>

<body>
    <div class="card-custom text-center">
        <img src="{{ asset('img/logoo.png') }}" alt="logo" width="150" style="margin-bottom:10px;">
        <h4 class="mb-4">Consulta de Documento Electrónico</h4>

        {{-- Mostrar la factura registrada --}}
        @if(session('factura'))
        <div class="factura-card">
            <div class="factura-header">
                <img src="{{ asset('img/logoo.png') }}" alt="logo" class="img-fluid" style="max-width:195px;">
                <div class="factura-info">
                    <h5><i class="bi bi-file-earmark-check-fill"></i> Factura Registrada Correctamente</h5>
                    <p><strong>RUC:</strong> {{ session('factura')->ruc }}</p>
                    <p><strong>Fecha y Hora:</strong> {{ session('factura')->created_at->format('Y-m-d H:i:s') }}</p>
                    <p><strong>Tipo:</strong> {{ session('factura')->tipo }}</p>
                    <p><strong>Serie:</strong> {{ session('factura')->serie }}</p>
                    <p><strong>Correlativo:</strong> {{ session('factura')->correlativo }}</p>
                </div>
            </div>
            <!-- Botón para descargar PDF -->
            <a href="{{ route('factura.descargar', session('factura')->id) }}" class="btn btn-custom">
                Descargar Documento <i class="bi bi-download"></i>
            </a>
        </div>
        @endif

        <form action="{{ route('consultar.guardar') }}" method="POST">
            @csrf
            <!-- RUC -->
            <input type="number" id="ruc" name="ruc" class="form-control mb-3" placeholder="Ingrese el RUC del Emisor"
                required oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,11)">

            <div class="row g-2 mb-4">
                <!-- Fecha -->
                <div class="col-md-6">
                    <label class="form-label">Elija la fecha y hora:</label>
                    <input type="datetime-local" id="fecha" name="fecha" class="form-control" required>
                </div>

                <!-- Tipo de Boleta -->
                <div class="col-md-6">
                    <label class="form-label">Tipo de Boleta:</label>
                    <select id="boleta" name="tipo" class="form-control" required>
                        <option value="">Seleccione una opción</option>
                        <option value="Nota de Venta">Nota de Venta</option>
                        <option value="Factura">Factura Electrónica</option>
                        <option value="Boleta de Venta">Boleta de Venta</option>
                        <option value="Nota de Crédito">Nota de Crédito</option>
                        <option value="Nota de Débito">Nota de Débito</option>
                    </select>
                </div>
            </div>

            <div class="row g-2 mb-4">
                <!-- Serie -->
                <div class="col-md-6">
                    <label class="form-label">Ingrese la serie:</label>
                    <input type="text" id="serie" name="serie" class="form-control" required>
                </div>

                <!-- Correlativo -->
                <div class="col-md-6">
                    <label class="form-label">Ingrese el correlativo:</label>
                    <input type="number" id="correlativo" name="correlativo" class="form-control" required
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                </div>
            </div>

            <!-- Botón principal -->
            <button type="submit" class="btn btn-custom">
                VER DOCUMENTO <i class="bi bi-save"></i>
            </button>

            <!-- Botón cancelar -->
            <div class="mt-3">
                <button type="button" onclick="window.history.back()" class="btn btn-cancel">
                    <i class="bi bi-arrow-left-circle"></i> Cancelar y Regresar
                </button>
            </div>
        </form>
    </div>

    <div class="footer-colors-vertical">
        <div class="color-bar" style="background:#0BBBD9;"></div>
        <div class="color-bar" style="background:#F271AC;"></div>
        <div class="color-bar" style="background:#FCD02F;"></div>
    </div>
</body>

</html>