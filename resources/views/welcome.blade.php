@extends('layout.base')

@section('title', 'SBF Perú')

@section('css')
  <style>
    /* General */
    body {
      min-width: 1200px;
    }

    .container {
      max-width: 1200px;
    }

    /* Hero con imagen de fondo */
    .hero {
      background: url("{{ asset('img/hero.jpg') }}") no-repeat center center;
      background-size: cover;
      color: white;
      text-shadow: 1px 1px 4px rgba(48, 46, 46, 0.6);
    }

    .navbar-nav .nav-link {
      margin-right: 40px;
    }

    .custom-nav {
      margin-left: 80px;
    }

    @media (min-width: 995px) {
      .custom-nav {
        margin-left: -10px;
      }
    }

    /* Texto Servicios */
    .custom-text {
      font-size: 17px;
      font-family: 'Arial', sans-serif;
      color: #444;
      line-height: 1.7;
    }

    /* Tarjetas de servicios */
    .service-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 15px;
    }

    .service-card:hover {
      transform: translateY(-8px);
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
    }

    .service-card img {
      height: 180px;
      object-fit: cover;
      border-radius: 15px 15px 0 0;
    }

    .titulo-principal {
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      font-size: 3rem;
      letter-spacing: 1px;
      color: #1a1a1a;
    }
  </style>
@endsection

@section('content')
  <!-- Hero -->
  <section id="inicio" class="hero d-flex align-items-center text-start py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7">
          <h1 class="display-5 fw-bold titulo-personalizado">
            FACTURACIÓN ELECTRÓNICA ÁGIL Y CONFIABLE
          </h1>

          <style>
            .titulo-personalizado {
              font-family: 'Raleway', sans-serif;
              font-weight: 700;
              font-size: 3rem;
              letter-spacing: 1px;
              color: #ffffff;
            }
          </style>
          <p class="lead mt-3">
            El sistema de facturación electrónica más rápido, seguro y accesible del Perú.
            Diseñado para emprendedores, negocios en crecimiento y empresas consolidadas.
          </p>
          <ul class="list-unstyled fs-5 mt-4">
            <li>✅ Simplifica tu contabilidad</li>
            <li>✅ Integrado a SUNAT & RENIEC</li>
            <li>✅ Planes flexibles</li>
            <li>✅ Gestión administrativa completa</li>
          </ul>
        </div>
      </div>
      <p class="mt-4 fs-5 fw-semibold text-center">
        ¡Empieza a facturar hoy mismo y haz crecer tu negocio sin límites!
      </p>
    </div>
  </section>


  <!-- Servicios -->
  <section id="servicios" class="py-5"
    style="background: url('{{ asset('img/fondo-servicios.jpg') }}') no-repeat center center/cover;">
    <div class="container">

      <!-- Título -->
      <h2 class="text-center fw-bold mb-3">SOLUCIÓN DE FACTURACIÓN TODO EN UNO</h2>
      <p class="custom-text text-center mb-5">
        Optimiza la gestión de tu facturación electrónica con nuestra plataforma fácil de usar.<br>
        Administra tus clientes, productos, ventas y más desde un único lugar.
      </p>

      <div class="row align-items-stretch g-4">

        <!-- Columna izquierda -->
        <div class="col-md-4 d-flex flex-column gap-3">
          <div class="card shadow-sm border-0 p-3 text-center flex-fill">
            <img src="{{ asset('img/icon-facturacion.png') }}" width="45" class="mx-auto mb-2" alt="Facturación">
            <h6 class="fw-bold">Facturación Electrónica</h6>
            <p class="text-muted small">Emite comprobantes electrónicos válidos ante SUNAT & RENIEC de forma rápida y
              segura.</p>
          </div>
          <div class="card shadow-sm border-0 p-3 text-center flex-fill">
            <img src="{{ asset('img/icon-gestion.png') }}" width="45" class="mx-auto mb-2" alt="Gestión">
            <h6 class="fw-bold">Gestión Administrativa Completa</h6>
            <p class="text-muted small">Administra clientes, productos, ventas e inventarios desde un solo lugar.</p>
          </div>
          <div class="card shadow-sm border-0 p-3 text-center flex-fill">
            <img src="{{ asset('img/icon-soporte.png') }}" width="45" class="mx-auto mb-2" alt="Soporte">
            <h6 class="fw-bold">Soporte Técnico Especializado</h6>
            <p class="text-muted small">Asistencia rápida y confiable para resolver cualquier inconveniente.</p>
          </div>
        </div>

        <!-- Mockup central reducido -->
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <img src="{{ asset('img/mockup-sistema.png') }}" class="img-fluid" style="max-width:75%; height:auto;"
            alt="Pantallas del sistema">
        </div>

        <!-- Columna derecha -->
        <div class="col-md-4 d-flex flex-column gap-3">
          <div class="card shadow-sm border-0 p-3 text-center flex-fill">
            <img src="{{ asset('img/icon-integracion.png') }}" width="45" class="mx-auto mb-2" alt="Integración">
            <h6 class="fw-bold">Integración con SUNAT y RENIEC</h6>
            <p class="text-muted small">Garantizamos cumplimiento con las normativas peruanas para tu tranquilidad.</p>
          </div>
          <div class="card shadow-sm border-0 p-3 text-center flex-fill">
            <img src="{{ asset('img/icon-planes.png') }}" width="45" class="mx-auto mb-2" alt="Planes">
            <h6 class="fw-bold">Planes Flexibles y Escalables</h6>
            <p class="text-muted small">Soluciones que se adaptan al crecimiento de tu negocio.</p>
          </div>
          <div class="card shadow-sm border-0 p-3 text-center flex-fill">
            <img src="{{ asset('img/icon-seguridad.png') }}" width="45" class="mx-auto mb-2" alt="Seguridad">
            <h6 class="fw-bold">Seguridad y Respaldo de Información</h6>
            <p class="text-muted small">Protegemos tus datos con tecnología segura y almacenamiento confiable.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Nosotros -->
  <section id="nosotros" class="py-5 text-center text-dark"
    style="background: url('{{ asset('img/fondo-servicios.jpg') }}') no-repeat center center/cover;">
    <div class="container">
      <h2 class="fw-bold mb-3">BIENVENIDO A SBF PERÚ S.A.C.</h2>
      <p class="mb-3" style="font-size: 15px;">
        SBF Perú S.A.C. es una empresa dedicada a brindar diversos servicios, entre ellos, Librería Fotocopiadora,
        Facturación Electrónica para empresas RUC 10 o 20 para emprendedores de todos los giros, Servicio Técnico, Venta
        de equipos de informática y Video seguridad e instalación. Con más de 5 años desde su fundación seguimos
        posicionados como una empresa que se preocupa por las personas, buscando brindar siempre el mejor servicio.
      </p>

      <div class="container my-5">
        <h2 class="text-center fw-bold mb-4">Nuestros Servicios</h2>
        <div class="row g-4 justify-content-center">
          <!-- Servicio 1 -->
          <div class="col-md-3 col-sm-6">
            <div class="card shadow-lg border-0 h-100 text-center service-card">
              <img src="{{ asset('img/sopote-equipos.png') }}" alt="Soporte de equipos"
                class="card-img-top rounded-top">
              <div class="card-body">
                <h5 class="fw-bold">Soporte de Equipos</h5>
                <p class="text-muted small">Mantenimiento y reparación de equipos de cómputo con soporte técnico
                  especializado.</p>
              </div>
            </div>
          </div>

          <!-- Servicio 2 -->
          <div class="col-md-3 col-sm-6">
            <div class="card shadow-lg border-0 h-100 text-center service-card">
              <img src="{{ asset('img/libreria.png') }}" alt="Librería Fotocopiadora" class="card-img-top rounded-top">
              <div class="card-body">
                <h5 class="fw-bold">Librería Fotocopiadora</h5>
                <p class="text-muted small">Venta de útiles escolares, fotocopias, impresiones y más servicios de
                  librería.</p>
              </div>
            </div>
          </div>

          <!-- Servicio 3 -->
          <div class="col-md-3 col-sm-6">
            <div class="card shadow-lg border-0 h-100 text-center service-card">
              <img src="{{ asset('img/facturacion.png') }}" alt="Facturación Electrónica"
                class="card-img-top rounded-top">
              <div class="card-body">
                <h5 class="fw-bold">Facturación Electrónica</h5>
                <p class="text-muted small">Sistema de emisión de comprobantes electrónicos con envío automático a SUNAT
                  & RENIEC.</p>
              </div>
            </div>
          </div>

          <!-- Servicio 4 -->
          <div class="col-md-3 col-sm-6">
            <div class="card shadow-lg border-0 h-100 text-center service-card">
              <img src="{{ asset('img/camaras.png') }}" alt="Sistema de Cámaras" class="card-img-top rounded-top">
              <div class="card-body">
                <h5 class="fw-bold">Sistema de Cámaras</h5>
                <p class="text-muted small">Instalación y monitoreo de cámaras de seguridad para empresas y hogares.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Botón de WhatsApp -->
      <a href="https://wa.me/51953891818" target="_blank"
        class="btn btn-success btn-lg px-4 py-2 rounded-pill d-inline-flex align-items-center">
        <i class="bi bi-whatsapp me-2 fs-4"></i> Escríbenos al WhatsApp
      </a>
    </div>
  </section>

  <!-- Redes -->
  <section id="redes" class="py-5"
    style="background: url('{{ asset('img/fondo-servicios.jpg') }}') no-repeat center center/cover; position: relative;">
    <div class="container" style="padding-bottom: 200px;">
      <div class="row justify-content-center">
        <div class="col-md-6">

          <!-- Caja blanca centrada -->
          <div class="bg-white shadow-lg rounded-4 p-5 text-center" style="margin-bottom: 0;">
            <h3 class="fw-bold mb-3" style="color:#222; font-size:1.8rem;">¡EMPIEZA GRATIS HOY!</h3>
            <p class="mb-4" style="color:#555; font-size:1rem;">
              Solicita una demo y descubre cómo podemos transformar tu negocio
            </p>

            <!-- Formulario -->
            <form>
              <div class="mb-3">
                <input type="text" class="form-control rounded-pill" placeholder="Nombre" required>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control rounded-pill" placeholder="Correo" required>
              </div>
              <div class="mb-3">
                <input type="tel" class="form-control rounded-pill" placeholder="Teléfono" required>
              </div>
              <div class="mb-3">
                <textarea class="form-control rounded-3" rows="3" placeholder="Mensaje"
                  style="resize: none;"></textarea>
              </div>
              <button type="submit" style="display:inline-flex;align-items:center;gap:6px;
             background:#659869;color:#fff;border:none;
             border-radius:50px;padding:10px 22px;
             font-size:1rem;font-weight:600;cursor:pointer;
             transition:background .3s">
                <i class="bi bi-send-fill"></i> ENVIAR
              </button>

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </section>
@endsection