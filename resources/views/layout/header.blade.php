<nav class="navbar navbar-expand-lg navbar-light custom-navbar shadow-sm">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand fw-bold" href="#inicio">
      <img src="{{ asset('img/logo1.png') }}" alt="Logo" height="60" class="me-2">
    </a>

    <!-- Botón -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menú -->
    <div class="collapse navbar-collapse" id="menu">

      <!-- Navegación -->
      <ul class="navbar-nav mb-2 mb-lg-0 custom-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/') }}">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#servicios">SERVICIOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#nosotros">NOSOTROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contacto">CONTACTO</a>
        </li>
      </ul>

      <style>
        /* ====== ESTILO NAVBAR ====== */
        .custom-navbar {
          background: linear-gradient(90deg, #ffffffff, #ffffffff);
          border-bottom: 1px solid #e4e4e4;
          transition: background-color 0.3s ease;
        }

        /* ====== MENÚ ====== */
        .custom-nav {
          margin-left: 65px;
        }

        .custom-nav .nav-link {
          color: #414141;
          padding: 5px 15px;
          margin: 3px;
          border-radius: 5px;
          font-weight: 400;
          letter-spacing: 0.5px;
          transition: all 0.3s ease;
        }

        .custom-nav .nav-link:hover {
          color: #0d6efd; 
          background-color: rgba(13, 110, 253, 0.1);
        }

        .custom-nav .nav-link.active {
          color: #0d6efd !important;
          background-color: rgba(13, 110, 253, 0.15);
          border-radius: 8px;
          box-shadow: 0 0 6px rgba(13, 110, 253, 0.2);
        }
      </style>

      <script>
        document.addEventListener("DOMContentLoaded", function() {
          const navLinks = document.querySelectorAll(".custom-nav .nav-link");

          navLinks.forEach(link => {
            link.addEventListener("click", function() {
              navLinks.forEach(l => l.classList.remove("active"));
              this.classList.add("active");
            });
          });
        });
      </script>

      <!-- Botones a la derecha -->
      <div class="ms-auto ms-lg-8">
        <a href="{{ url('/inicio') }}" class="btn btn-success">Ingresar al sistema</a>
        <a href="{{ url('/consultar') }}" class="btn btn-primary ms-4">Consultar facturas</a>
      </div>
    </div>
  </div>
</nav>
