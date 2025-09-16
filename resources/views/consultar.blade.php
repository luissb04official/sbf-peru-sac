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

  <style>
    body {
      background-image: url('{{ asset("img/fondo.png") }}');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      margin: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .card-custom {
      background: #f1f1f1;
      border-radius: 30px;
      padding: 35px;
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.15);
      max-width: 600px;
      width: 100%;
      border: 5px solid #d0d0d0;
      transform: translateY(-23px);
      text-align: center;
    }

    .btn-custom {
      background: #f55f5f;
      color: white;
      font-size: 1.2rem;
      padding: 12px 8px;
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
      padding: 8px 18px;
      border-radius: 8px;
      margin-top: 15px;
    }

    .btn-cancel:hover {
      background: #5a6268;
    }

    /* --- MODAL DE FACTURA --- */
    .factura-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 998;
    }

    .factura-card {
      position: relative;
      z-index: 999;
      width: 95%;
      max-width: 750px;
      background: #ffffff;
      border: 3px solid #ccc;
      border-radius: 25px;
      padding: 30px 25px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
      text-align: left;
    }

    .factura-header {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-bottom: 20px;
    }

    .factura-header img {
      max-width: 150px;
    }

    .factura-info h5 {
      font-size: 1.4rem;
      margin-bottom: 10px;
      color: #f55f5f;
    }

    .factura-info p {
      font-size: 1.05rem;
      margin: 4px 0;
    }

    /* Botón centrado */
    .factura-actions {
      text-align: center;
      margin-top: 20px;
    }

    .factura-actions .btn-custom {
      display: inline-block;
      background: #f55f5f;
      color: #fff;
      padding: 14px 28px;
      border-radius: 12px;
      font-size: 1.15rem;
      text-decoration: none;
      transition: 0.3s;
    }

    .factura-actions .btn-custom:hover {
      background: #e14a4a;
    }

    /* Footer */
    .footer-colors-vertical {
      position: absolute;
      bottom: 10px;
      left: 0;
      width: 100%;
    }

    .color-bar {
      height: 17px;
    }
  </style>
</head>

<body>
  <div class="card-custom">
    <img src="{{ asset('img/logofact.png') }}" alt="logo" style="max-width: 180px; height: auto; margin-bottom:10px;">
    <h4 class="mb-4">Consulta de Documento Electrónico</h4>

    <form action="{{ route('consultar.guardar') }}" method="POST">
      @csrf
      <input type="number" id="ruc" name="ruc" class="form-control mb-3" placeholder="Ingrese el RUC del Emisor"
        required oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,11)">

      <div class="row g-2 mb-4">
        <div class="col-md-6">
          <label class="form-label">Elija la fecha y hora:</label>
          <input type="datetime-local" id="fecha" name="fecha" class="form-control" required>
        </div>

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
        <div class="col-md-6">
          <label class="form-label">Ingrese la serie:</label>
          <input type="text" id="serie" name="serie" class="form-control" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Ingrese el correlativo:</label>
          <input type="number" id="correlativo" name="correlativo" class="form-control" required
            oninput="this.value = this.value.replace(/[^0-9]/g, '')">
        </div>
      </div>

      <button type="submit" class="btn btn-custom">
        VER DOCUMENTO <i class="bi bi-save"></i>
      </button>

      <div class="mt-3">
        <button type="button" onclick="window.history.back()" class="btn btn-cancel">
          <i class="bi bi-arrow-left-circle"></i> Cancelar y Regresar
        </button>
      </div>
    </form>
  </div>

  <!-- Footer fijo abajo -->
  <div class="footer-colors-vertical">
    <div class="color-bar" style="background:#0BBBD9; height:20px;"></div>
    <div class="color-bar" style="background:#F271AC; height:20px; margin-top:6px;"></div>
    <div class="color-bar" style="background:#FCD02F; height:20px; margin-top:6px;"></div>
  </div>

  @if(session('factura'))
  <div class="factura-overlay">
    <div class="factura-card">
      <div class="factura-header">
        <img src="{{ asset('img/logoo.png') }}" alt="logo">
        <div class="factura-info">
          <h5><i class="bi bi-file-earmark-check-fill"></i> Factura Registrada Correctamente</h5>
          <p><strong>RUC:</strong> {{ session('factura')->ruc }}</p>
          <p><strong>Fecha y Hora:</strong> {{ session('factura')->created_at->timezone('America/Lima')->format('Y-m-d H:i:s') }}</p>
          <p><strong>Tipo:</strong> {{ session('factura')->tipo }}</p>
          <p><strong>Serie:</strong> {{ session('factura')->serie }}</p>
          <p><strong>Correlativo:</strong> {{ session('factura')->correlativo }}</p>
        </div>
      </div>

      <!-- Botón centrado -->
      <div class="factura-actions">
        <a href="{{ route('factura.descargar', session('factura')->id) }}" class="btn btn-custom">
          Descargar Documento <i class="bi bi-download"></i>
        </a>
      </div>
    </div>
  </div>
  @endif
</body>

</html>
