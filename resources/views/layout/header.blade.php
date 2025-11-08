<nav class="navbar navbar-expand-lg navbar-light bg-white nav-modern" style="z-index:1050;">
  <div class="container-fluid px-lg-5">

    <!-- Logo a la izquierda -->
    <a class="navbar-brand fw-bold d-flex align-items-center" href="#inicio" style="padding-right:2.5rem;">
      <img src="{{ asset('img/logo1.png') }}" alt="Logo" height="54" class="me-2">
    </a>

    <!-- Botón -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menú y botones -->
    <div class="collapse navbar-collapse" id="menu">

      <!-- Menú centrado -->
      <ul class="navbar-nav mx-auto gap-lg-4 gap-2 nav-modern-menu" style="font-family: 'Poppins',sans-serif; font-weight:700; font-size:1.13rem;">
        <li class="nav-item"><a class="nav-link px-3 py-2" href="{{ url('/') }}">INICIO</a></li>
        <li class="nav-item"><a class="nav-link px-3 py-2" href="#servicios">SERVICIOS</a></li>
        <li class="nav-item"><a class="nav-link px-3 py-2" href="#nosotros">NOSOTROS</a></li>
        <li class="nav-item"><a class="nav-link px-3 py-2" href="#contacto">CONTACTO</a></li>
      </ul>
      <!-- Botones a la derecha -->
      <div class="d-flex gap-3 ms-lg-4 mt-3 mt-lg-0 header-btn-group">
        @auth
          @if( (Auth::user()->is_admin ?? false) )
            <a href="{{ url('/mensajes') }}" class="btn btn-warning btn-admin" aria-label="Ver mensajes" title="Ver mensajes de contacto">
              <i class="bi bi-envelope-fill"></i> Mensajes
            </a>
          @endif
        @endauth
        <a href="{{ url('/inicio') }}" class="btn btn-success btn-ingresar" aria-label="Ingresar al sistema">Ingresar al sistema</a>
        <a href="{{ url('/consultar') }}" class="btn btn-primary btn-consultar-fact" aria-label="Consultar facturas">Consultar facturas</a>
      </div>
    </div>
  </div>

  <style>
  /* Topbar removed */
    .nav-modern {
      box-shadow: 0 2px 16px 0 rgba(30,64,175,0.07), 0 1.5px 0 0 #e5e7eb;
      border-bottom: 1.5px solid #e5e7eb;
      min-height: 70px;
      background: rgba(255,255,255,0.97) !important;
      backdrop-filter: blur(6px);
      transition: box-shadow 0.2s;
    }
    .nav-modern-menu .nav-link {
      color: #5b565676 !important; 
      font-weight: 700;
      letter-spacing: 0.55px;
      position: relative;
      transition: color 0.18s, background-color 0.18s, box-shadow 0.18s;
      padding-bottom: 0.2em;
      border-radius: 10px;
    }
    .nav-modern-menu .nav-link:after {
      content: '';
      display: block;
      width: 0;
      height: 3px; 
      background: linear-gradient(90deg, #60a5fa 0%, #1d4ed8 100%);
      border-radius: 2px;
      transition: width 0.25s ease;
      margin: 0 auto;
    }
    .nav-modern-menu .nav-link:hover:after, .nav-modern-menu .nav-link.active:after {
      width: 90%;
    }
    .nav-modern-menu .nav-link:hover, .nav-modern-menu .nav-link.active {
      color: #0b5bd3 !important; 
      background-color: rgba(29,78,216,0.12);
      text-shadow: 0 1px 6px rgba(56,189,248,0.10);
    }
    .nav-modern-menu .nav-link:focus-visible {
      outline: 2px solid #93c5fd;
      outline-offset: 2px;
      border-radius: 10px;
    }
  .header-btn-group .btn { display:inline-flex; align-items:center; gap:.55rem; }
  .header-btn-group .btn { border-radius:6px !important; background-image:none !important; box-shadow:none !important; }
    .btn-success, .btn-primary, .btn-login, .btn-consultar {
      --btn-radius: 6px;
      border-radius: var(--btn-radius) !important; 
      font-family: 'Poppins',sans-serif;
      font-weight:600;
      font-size:.95rem;
      letter-spacing:.3px;
      padding:.68rem 1.55rem !important;
      line-height:1.1;
      position:relative;
      isolation:isolate;
      transition: background .18s, box-shadow .22s, transform .18s, color .18s, border-color .18s;
      text-decoration:none !important;
    }

  .btn-ingresar { background-color:#2e7d32 !important; border-color:#2a6f2d !important; box-shadow:none !important; }
  .btn-ingresar:hover { background-color:#2a6f2d !important; border-color:#275f29 !important; box-shadow:none; }
  .btn-ingresar:active { box-shadow:none; }
  .btn-ingresar:focus-visible { outline:3px solid rgba(46,125,50,.35); outline-offset:2px; }
  
  .btn-consultar-fact { background-color:#1f6feb !important; border-color:#195bd3 !important; box-shadow:none !important; }
  .btn-consultar-fact:hover { background-color:#1a60d1 !important; border-color:#1755bb !important; box-shadow:none; }
  .btn-consultar-fact:active { box-shadow:none; }
  
  .btn-admin { background-color:#ffc107 !important; border-color:#e0a800 !important; box-shadow:none !important; color:#000 !important; }
  .btn-admin:hover { background-color:#e0a800 !important; border-color:#c69500 !important; box-shadow:none; }
  .btn-admin:active { box-shadow:none; }
  .btn-admin:focus-visible { outline:3px solid rgba(255,193,7,.35); outline-offset:2px; }
  .btn-consultar-fact:focus-visible { outline:3px solid rgba(31,111,235,.35); outline-offset:2px; }
    @media (max-width: 991.98px){ .header-btn-group .btn { width:100%; justify-content:center; } }
    @media (max-width: 991.98px) {

      .navbar-nav {
        gap: 0 !important;
        text-align: center;
      }
      .d-flex.gap-3 {
        gap: 1rem !important;
        flex-direction: column;
        align-items: stretch;
      }
      .navbar-collapse {
        background: rgba(255,255,255,0.98);
        border-radius: 0 0 1.5em 1.5em;
        box-shadow: 0 8px 24px rgba(56,189,248,0.07);
        margin-top: 0.5em;
        padding-bottom: 1em;
      }
    }
  </style>
</nav>
