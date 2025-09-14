<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand fw-bold" href="#inicio">
        <img src="{{ asset('img/logo1.png') }}" alt="Logo" height="57" class="me-2">
      </a>

      <!-- Botón -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menú -->
      <div class="collapse navbar-collapse" id="menu">

        <!-- Navegación -->
        <ul class="navbar-nav mb-2 mb-lg-0 custom-nav">
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">INICIO</a></li>
          <li class="nav-item"><a class="nav-link" href="#servicios">SERVICIOS</a></li>
          <li class="nav-item"><a class="nav-link" href="#nosotros">NOSOTROS</a></li>
          <li class="nav-item"><a class="nav-link" href="#contacto">CONTACTO</a></li>

        </ul>

        <style>
          .custom-nav {
            margin-left: 65px;
          }
        </style>

        <!-- Botones a la derecha -->
        <div class="ms-auto ms-lg-8">
          <a href="{{ url('/inicio') }}" class="btn btn-success">Ingresar al sistema</a>
          <a href="{{ url('/consultar') }}" class="btn btn-primary ms-4">Consultar facturas</a>
        </div>
      </div>
    </div>
</nav>
